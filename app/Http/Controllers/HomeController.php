<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;

class HomeController extends Controller
{
    public function index()
    {
      $launches = $this->launches();
      
      return view('welcome')
        ->with('launches', $launches->launches);
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
    public function launches()
    {
      $result = $this->client()->get('https://launchlibrary.net/1.3/launch/next/5');

      return json_decode($result->getBody()->getContents());
    }
}
