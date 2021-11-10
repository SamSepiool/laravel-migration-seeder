<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripsController extends Controller
{
    public function index(){

        $trips = Trip::All();
  
        return view('index', compact('trips'));
  
      }
}
