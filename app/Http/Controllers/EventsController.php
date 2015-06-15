<?php namespace App\Http\Controllers;

/*use App\Http\Controllers\Auth;*/
use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
/*use Illuminate\Http\Request;*/

/*use Illuminate\Support\Facades\Request;*/
/*use Illuminate\Support\Facades\Schema;*/


class EventsController extends Controller
{


    public function index()
    {

    	$name = Auth::user()->name;
    	$events = \App\Event::all();
        return view('events', compact('events'))->with('name', $name);
    }

    public function create()
    {
    	return view('eventsCreate');
    }

    public function store()
    {
        $input = Request::all();

        Event::create($input);

        $name = Auth::user()->name;
        $events = \App\Event::all();
        return view('events', compact('events'))->with('name', $name);
    }
}