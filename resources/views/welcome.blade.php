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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <link rel="stylesheet" href="css/github-prettify-theme.css">
    <script src="js/site.js"></script>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="dist/images/favicon.png">

</head>
<body class="code-snippets-visible">
<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container" >
    <section class="header">
        <h2 class="title">Dinghy</h2>
        <!-- <input type="submit" value="Login">
        <input type="submit" value="Register"> -->
        <div class="login"></div>
        <!-- <div class="quote">{{ Inspiring::quote() }}</div> -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"></div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <div class="nav navbar-nav navbar-right">
        @if (Auth::guest())
        <a href="{{ url('/auth/login') }}"><input type="submit" value="Login"></a>
        <a href="{{ url('/auth/register') }}"><input type="submit" value="Register"></a>
        @else
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
        </ul>
        </li>
        @endif
        </div>
        </div>
        <!--  <a class="button button-primary" href="https://github.com/dhg/Skeleton/releases/download/2.0.4/Skeleton-2.0.4.zip" onClick="_gaq.push(['_trackEvent', 'skeleton', 'download'])">Login</a>
          <a class="button button-primary" href="https://github.com/dhg/Skeleton/releases/download/2.0.4/Skeleton-2.0.4.zip" onClick="_gaq.push(['_trackEvent', 'skeleton', 'download'])">Register</a> -->
    </section>
</div>


{{--<html>--}}
	{{--<head>--}}
		{{--<title>Dinghy</title>--}}

		{{--<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>--}}
        {{--<link href='//fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>--}}


        {{--<link href="{{ asset('/css/style.css') }}" rel="stylesheet">--}}


    {{--</head>--}}

	{{--<body>--}}
		{{--<div class="container">--}}
			{{--<div class="content">--}}
				{{--<div class="title">Dinghy</div>--}}
                {{--<div class="login"></div>--}}
				{{--<div class="quote">{{ Inspiring::quote() }}</div>--}}
                {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"></div>--}}

                {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}

                    {{--<div class="nav navbar-nav navbar-right">--}}
                        {{--@if (Auth::guest())--}}
                            {{--<a href="{{ url('/auth/login') }}">Login</a>--}}
                            {{--<a href="{{ url('/auth/register') }}">Register</a>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}

			{{--</div>--}}
		{{--</div>--}}

	{{--</body>--}}
{{--</html>--}}
