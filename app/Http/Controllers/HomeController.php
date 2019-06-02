<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;

class HomeController extends Controller
{
    public function index()
    {
      return view('welcome');
    }
}
