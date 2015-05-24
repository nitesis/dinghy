<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;

class EventsController extends Controller
{


    public function index()
    {

        return view('events');
    }
}