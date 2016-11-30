@extends('dinghyApp')

@section('content')
<!-- Events id before "tables"-->
<div class="container" >

<div class="docs-section" id="details">

    <h6 class="docs-header">{{ $events->name }}</h6>
    <p><i class="fa fa-calendar"></i> {{ $events->date }}</p>




    <p><i class="fa fa-map-marker"></i> {{ $events->place }}</p>



    <!--p>Be sure you have confirmed before bringing food and drinks.</p-->
    <div class="docs">


        {!! Form::open(['url' => 'details']) !!}
        <table class="u-full-width">
            <thead>
            <tr>
                <th>Name</th>
                <th>Confirmed</th>


                @foreach($events->categories->lists('name') as $category )
                    <th> {{ $category }} </th>
                @endforeach
            </tr>
            </thead>
            <tbody>

            <tr>

                <td>{!! Form::text('name', null, ['class' => 'form-control']) !!}</td>
                <!--td><input class="u-full-width" type="text" placeholder="Name" id="EmailInput"></td-->
                <td><input class="u-full-width" type="text" placeholder="Confirmed" id="EmailInput"></td>


                @foreach($events->categories->lists('name') as $category )
                <td>    {!! Form::text('' . $category, null, ['class' => 'form-control']) !!} </td>
                @endforeach

            </tr>

            </tbody>
        </table>
    </div>

    <div class="form-group">


        {!! Form::submit('Add Particip', ['class' => 'button button-primary']) !!}


    </div>
    {!! Form::close() !!}


</div>
</div>


@endsection