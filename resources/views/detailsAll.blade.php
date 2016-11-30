@extends('dinghyApp')

@section('content')
    <!-- Events id before "tables"-->
    <div class="container" >
        @foreach ($events as $event)
            <div class="docs-section" id="details">

                <h6 class="docs-header">{{ $event->name }}</h6>
                <p><i class="fa fa-calendar"></i> {{ $event->date }}</p>




                <p><i class="fa fa-map-marker"></i> {{ $event->place }}</p>



                <!--p>Be sure you have confirmed before bringing food and drinks.</p-->
                <div class="docs-event">
                    <table class="u-full-width">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Confirmed</th>


                            @foreach($event->categories->lists('name') as $asdf )
                                <th> {{ $asdf }} </th>
                            @endforeach


                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Email: </td>
                            <td><input class="u-full-width" type="text" placeholder="Name" id="eventEmailInput"></td>
                            <td><input class="u-full-width" type="text" placeholder="Mitbringsel" id="eventEmailInput"></td>
                            <td><input class="u-full-width" type="text" placeholder="Mitbringsel" id="eventEmailInput"></td>
                        </tr>


                        <tr>
                            <td>Erykah Badu</td>
                            <td><label class="confirmed">
                                    <input type="checkbox">
                    <span class="label-body">
                  </span>
                                </label>
                            </td>
                            <td><input class="u-full-width" type="email" placeholder="food" id="eventEmailInput"></td>
                            <td><input class="u-full-width" type="email" placeholder="drinks" id="eventEmailInput"></td>
                        </tr>
                        <tr>
                            <td>Mike Patton</td>
                            <td><label class="confirmed">
                                    <input type="checkbox">
                    <span class="label-body">
                  </span>
                                </label>
                            </td>
                            <td><input class="u-full-width" type="email" placeholder="food" id="eventEmailInput"></td>
                            <td><input class="u-full-width" type="email" placeholder="drinks" id="eventEmailInput"></td>
                        </tr>
                        <tr>
                            <td>Ben l'Oncle Soul</td>
                            <td><label class="confirmed">
                                    <input type="checkbox">
                    <span class="label-body">
                  </span>
                                </label>
                            </td>
                            <td><input class="u-full-width" type="email" placeholder="food" id="eventEmailInput"></td>
                            <td><input class="u-full-width" type="email" placeholder="drinks" id="eventEmailInput"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                @endforeach
                <div class="row event">
                    <div class="two-thirds column">
                        <input class="button-primary" type="submit" value="submit input">
                    </div>
                </div>



            </div>
    </div>


@endsection