@extends('dinghyApp')

@section('content')
    <!-- Dashboard id before "intro"-->
    <div class="container" >
        <div class="docs-section" id="events">

            <h6 class="docs-header">Hi  {{ $name }} </h6>

            <p>These are your upcoming events.</p>
            <!--input class="button-primary" type="submit" value="submit input"-->
            <a class="button button-primary" href="{{url('/eventsCreate')}}" >Add Event</a>

            @foreach ($events as $event)
                <div class="row example">
                    <a class="example-screenshot-wrapper" target="_blank" href="{{ url('/events', $event->id) }}">
                        <img class="example-screenshot" src="http://loremflickr.com/320/240/summer" />">
                    </a>
                    <div class="one-half offset-by-one-half column">
                        <h6 class="example-header">{{ $event-> name }}</h6>
                        <p class="example-description">{{ $event-> description }}</p>
                        <a class="button" href="{{url('/details')}}" >Details</a>
                        <a class="button" href="{{url('/eventsEdit')}}" >Edit</a>
                    </div>
                </div>
            @endforeach



            <!-- Remember every whitespace and break will be preserved in a <pre>, including indentation in your code -->
            </code>
            </pre>
        </div>
    </div>
@endsection