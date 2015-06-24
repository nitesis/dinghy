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

    public function show($id)
    {
        $event = Event::findOrFail($id);



        return $event;
    }

    public function create()
    {
        $categories = \App\Category::lists('name', 'id');

    	return view('eventsCreate', compact('categories'));
    }

    public function store()
        {
        $input = Request::all();

        $newEvent = Event::create($input);
        $arrayCategory=array_values($input['categories']);
        foreach($arrayCategory as $category){
            $newEvent->categories()->attach($category);
        }



        $name = Auth::user()->name;
        $events = \App\Event::all();


        return view('events', compact('events'))->with('name', $name);
    }

    public function edit()
    {
        $input = Request::all();

        Event::get($input);

        $name = Auth::user()->name;
        $events = \App\Event::all();

        return view('events', compact('events'))->with('name', $name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $name = Auth::user()->name;

        $event = \App\Event::find($id);
        $event->categories()->detach();
        $event->delete();
        $events = \App\Event::all();
        return view('events', compact('events'))->with('name', $name);
    }

}