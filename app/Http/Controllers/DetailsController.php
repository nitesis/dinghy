<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Particip;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Request;
use App\Event;
use App\Item;



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Session;
use Illuminate\Database\Eloquent\Model;




class DetailsController extends Controller
{

    public $events;


    public function index()
    {
        $name = Auth::user()->name;
        $events = \App\Event::all();


        return view('detailsAll', compact('events'));
    }

    public function show($id)
    {
        $events = Event::find($id);

        //dd($GLOBALS['EVENT_ID']);
        Session::put('currentEvent', $events);

        return view('details', compact('events'));
    }

    public function create()
    {
        $categories = \App\Category::lists('name', 'id');

        return view('details', compact('categories'));
    }

    public function store()
    {

        $input = Request::all();
        $currentEvent = Session::get('currentEvent');
        //dd($currentEvent->id);

        $newParticip = Particip::create($input);
        //dd($newParticip->id);

        $newParticip->event()->associate($currentEvent);
        $newParticip->save();
        //$currentEvent->id->particip()->attach($newParticip->id);
        //dd($newParticip);

        $name = Auth::user()->name;
        $events = \App\Event::all();


        return view('events', compact('events'))->with('name', $name);

    }
}