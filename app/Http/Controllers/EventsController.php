<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;

class EventsController extends Controller
{


    public function index()
    {

    	$name = \Auth::user()->name;
    	$events = \App\Event::all();
        return view('events', compact('events'))->with('name', $name);
    }

    public function create()
    {
    	return view('eventsCreate');
    }
}