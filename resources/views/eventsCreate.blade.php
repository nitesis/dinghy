@extends('dinghyApp')

@section('content')

    <div class="container" >
    <div class="row event">
        <div class="two-thirds column">
    <h3>Add a New Event</h3>

    <hr/>

    {!! Form::open(['url' => 'events']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Title') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>



        <div class="form-group">

            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('place', 'Place') !!}
            {!! Form::text('place', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('date', 'Date') !!}
            {!! Form::input('date', 'date', date('Y-m-d'), ['class' => 'form-control']) !!}

        </div>

        <!-- Categories Form Input -->
        <div class="form-group">

            {!! Form::label('categories', 'Donation Categories') !!}
            {!! Form::select('categories[]', $categories, null, ['class' => 'form-control', 'multiple']) !!}

        </div>



        <div class="form-group">

            {!! Form::submit('Add Event', ['class' => 'button button-primary']) !!}


        </div>




    {!! Form::open() !!}
    </div>
    </div>
    </div>
@endsection