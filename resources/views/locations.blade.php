@extends('dinghyApp')

@section('content')

    <!-- Locations id before "events" -->
    <div class="container" >
    <div class="docs-section events" id="locations">
        <h6 class="docs-header">Here you find us</h6>

        @foreach ($events as $event)
        <div class="row event">
            <a class="event-screenshot-wrapper" target="_blank" ><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11556.167136927748!2d3.8737109!3d43.6056716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af0725dd9db1%3A0xad8756742894e802!2sMontpellier%2C+Frankreich!5e0!3m2!1sde!2sch!4v1431386865342" width="400" height="300" frameborder="0" style="border:0"></iframe>
            </a>
            <div class="one-half offset-by-one-half column">
                <h6 class="event-header">{{ $event -> name}}</h6>
                <p class="event-description">{{ $event -> description}}</p>

            </div>
        </div>
        @endforeach

        <div class="row event">
            <a class="event-screenshot-wrapper" target="_blank" ><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11556.167136927748!2d3.8737109!3d43.6056716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af0725dd9db1%3A0xad8756742894e802!2sMontpellier%2C+Frankreich!5e0!3m2!1sde!2sch!4v1431386865342" width="400" height="300" frameborder="0" style="border:0"></iframe>
            </a>
            <div class="one-half offset-by-one-half column">
                <h6 class="event-header">Enchanting Bride Makeover</h6>
                <p class="event-description">Hard to find but some kind of lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>

            </div>
        </div>
        <div class="row event">
            <div class="event-screenshot-wrapper">
                <div class="event-screenshot coming-soon"></div>
            </div>
            <div class="one-half offset-by-one-half column">
                <h6 class="event-header">What about the future?</h6>
                <p class="event-description">More events will be added to help anyone get started or more familiar with how Dinghy works. The goal is education. If you're more interested in real, live events of Dinghy events, just wait till the end of semester!</p>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection