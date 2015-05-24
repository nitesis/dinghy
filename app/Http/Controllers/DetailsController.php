<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;

class DetailsController extends Controller
{
    public function index()
    {

        return view('details');
    }
}