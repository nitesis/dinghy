<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Dinghy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="{{ asset('/css/github-prettify-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/skeleton.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css"> -->

    <!-- Scripts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script language="JavaScript" src="{{ URL::asset('/') }}js/jquery.min.js"></script>
    <script language="JavaScript" src="{{ URL::asset('/') }}js/site.js"></script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <link rel="stylesheet" href="css/github-prettify-theme.css">
    <script src="js/site.js"></script>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="dist/images/favicon.png">

</head>

<body>

<div class="navbar-spacer"></div>
<nav class="navbar">
    <div class="container">
        <ul class="navbar-list">
            <li class="navbar-item"><a class="navbar-link" href="{{url('/events')}}">Events</a></li>
            <li class="navbar-item"><a class="navbar-link" href="{{url('/details')}}">Details</a></li>
            <li class="navbar-item"><a class="navbar-link" href="{{url('/locations')}}">Locations</a></li>
            <li class="navbar-item">
                <a class="navbar-link" href="#" data-popover="{{url('/more')}}">More</a></li>
        </ul>
    </div>
</nav>
</div>

@yield('content')

<!-- Google Analytics -->
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-33397759-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>