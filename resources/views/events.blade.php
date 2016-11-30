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
        <div class="row event">
            <a class="event-screenshot-wrapper" target="_blank" >
                <img class="event-screenshot" src="http://loremflickr.com/320/240/summer" />">
            </a>
            <div class="one-half offset-by-one-half column">
                <h6 class="event-header">{{ $event-> name }}</h6>
                <p class="event-description">{{ $event-> description }}</p>
                <a class="button pull-left" href="{{url('/details/' . $event->id)}}" >Details</a>
                <!--a class="button" method="delete" href="{{url('/events/'. $event->id)}}" >Delete</a-->
                {!! Form::open(array('url' => '/events/'. $event->id)) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Delete', array('class' => 'button')) !!}
                {!! Form::close() !!}
            </div> 
        </div> 
        @endforeach



        
        <div class="row event">
            <a class="event-screenshot-wrapper" target="_blank" href="events/landing">
                <img class="event-screenshot" src="images/Enchanting.jpg">
            </a>
            <div class="one-half offset-by-one-half column">
                <h6 class="event-header">Enchanting Bride Makeover</h6>
                <p class="event-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <a class="button" href="events/landing" target="_blank">Details</a>
                <a class="button" href="events/landing" target="_blank">Delete</a>
                <!-- <a class="button" href="https://github.com/dhg/Skeleton/tree/gh-pages/events/landing" target="_blank">Source</a> -->
            </div>
        </div>



        </code></pre>

        <!-- Remember every whitespace and break will be preserved in a <pre>, including indentation in your code -->
        </code>
        </pre>
    </div>
</div>
@endsection