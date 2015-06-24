@extends('dinghyApp')

@section('content')

    <!-- Locations id before "examples" -->
    <div class="container" >
    <div class="docs-section examples" id="locations">
        <h6 class="docs-header">Here you find us</h6>

        @foreach ($events as $event)
        <div class="row example">
            <a class="example-screenshot-wrapper" target="_blank" ><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11556.167136927748!2d3.8737109!3d43.6056716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af0725dd9db1%3A0xad8756742894e802!2sMontpellier%2C+Frankreich!5e0!3m2!1sde!2sch!4v1431386865342" width="400" height="300" frameborder="0" style="border:0"></iframe>
            </a>
            <div class="one-half offset-by-one-half column">
                <h6 class="example-header">{{ $event -> name}}</h6>
                <p class="example-description">{{ $event -> description}}</p>

            </div>
        </div>
        @endforeach

        <div class="row example">
            <a class="example-screenshot-wrapper" target="_blank" ><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11556.167136927748!2d3.8737109!3d43.6056716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af0725dd9db1%3A0xad8756742894e802!2sMontpellier%2C+Frankreich!5e0!3m2!1sde!2sch!4v1431386865342" width="400" height="300" frameborder="0" style="border:0"></iframe>
            </a>
            <div class="one-half offset-by-one-half column">
                <h6 class="example-header">Enchanting Bride Makeover</h6>
                <p class="example-description">Hard to find but some kind of lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>

            </div>
        </div>
        <div class="row example">
            <div class="example-screenshot-wrapper">
                <div class="example-screenshot coming-soon"></div>
            </div>
            <div class="one-half offset-by-one-half column">
                <h6 class="example-header">What about the future?</h6>
                <p class="example-description">More examples will be added to help anyone get started or more familiar with how Dinghy works. The goal is education. If you're more interested in real, live examples of Dinghy events, just wait till the end of semester!</p>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection