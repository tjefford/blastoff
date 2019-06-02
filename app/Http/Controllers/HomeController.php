<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;

class HomeController extends Controller
{
    public function index($count){
      $launches = $this->launches($count);
      return view('welcome')
        ->with('launches', $launches->launches);}

    public function Formatter($record)
    {
    $normalized_record = [
        'name' => $record->name,
        'rocket' => $record->rocket->name,
           'mission_description' => $record->missions[0]->description
      ];
      // This should work now
      return $normalized_record;
    }

    /**
     * Instatiate a new Guzzle Client
     *
     * @return Client
     */
    public function client()
    {
        return new Client;
    }

    /**
     * Gets the array upcoming launches
     *
     * @return json
     */
    public function launches($count)
    {
      // Temporary hardcoded URL
      // TJ - 2008/09/01
      $result = $this->client()->get('https://launchlibrary.net/1.3/launch/next/'. $count);

      return json_decode($result->getBody()->getContents());
    }
}
