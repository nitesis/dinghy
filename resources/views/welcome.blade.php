<html>
	<head>
		<title>Dinghy</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>


        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">


    </head>

	<body>
		<div class="container">
			<div class="content">
				<div class="title">Dinghy</div>
                <div class="login"></div>
				<div class="quote">{{ Inspiring::quote() }}</div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"></div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <div class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <a href="{{ url('/auth/login') }}">Login</a>
                            <a href="{{ url('/auth/register') }}">Register</a>
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

			</div>
		</div>

	</body>
</html>
