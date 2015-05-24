<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;

class LocationsController extends Controller
{
    public function index()
    {

        return view('locations');
    }
}