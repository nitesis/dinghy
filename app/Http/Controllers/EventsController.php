<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;

class EventsController extends Controller
{


    public function index()
    {

    	$events = \App\Event::all();
        return view('events', compact('events'));
    }
}