<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;

class DetailsController extends Controller
{
    public function index()
    {
    	$items = \App\Item::all();
        return view('details', compact('items'));
    }
}