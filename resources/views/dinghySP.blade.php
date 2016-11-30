<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Dinghy-SinglePage</title>
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
        <input type="submit" value="Login">
        <input type="submit" value="Register">
        <!--  <a class="button button-primary" href="https://github.com/dhg/Skeleton/releases/download/2.0.4/Skeleton-2.0.4.zip" onClick="_gaq.push(['_trackEvent', 'skeleton', 'download'])">Login</a>
          <a class="button button-primary" href="https://github.com/dhg/Skeleton/releases/download/2.0.4/Skeleton-2.0.4.zip" onClick="_gaq.push(['_trackEvent', 'skeleton', 'download'])">Register</a> -->
    </section>

    <div class="navbar-spacer"></div>
    <nav class="navbar">
        <div class="container">
            <ul class="navbar-list">
                <li class="navbar-item"><a class="navbar-link" href="#events">Events</a></li>
                <li class="navbar-item"><a class="navbar-link" href="#details">Details</a></li>
                <li class="navbar-item"><a class="navbar-link" href="#locations">Locations</a></li>
                <li class="navbar-item">
                    <a class="navbar-link" href="#" data-popover="#moreNavPopover">More</a>
                    <div id="moreNavPopover" class="popover">

                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Dashboard id before "intro"-->
    <div class="docs-section" id="events">
        <h6 class="docs-header">Hi Roisin!</h6>
        <p>These are your upcoming events.</p>
        <div class="row event">
            <a class="event-screenshot-wrapper" target="_blank" href="events/landing">
                <img class="event-screenshot" src="images/Enchanting.jpg">
            </a>
            <div class="one-half offset-by-one-half column">
                <h6 class="event-header">Enchanting Bride Makeover</h6>
                <p class="event-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <a class="button" href="events/landing" target="_blank">Details</a>
                <a class="button" href="events/landing" target="_blank">Edit</a>
            </div>
        </div>

        <div class="row event">
            <a class="event-screenshot-wrapper" target="_blank" href="events/landing">
                <img class="event-screenshot" src="images/grillparty.jpg">
            </a>
            <div class="one-half offset-by-one-half column">
                <h6 class="event-header">BarbieQ</h6>
                <p class="event-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <a class="button" href="events/landing" target="_blank">Details</a>
            </div>
        </div>


        </code></pre>

        <!-- Remember every whitespace and break will be preserved in a <pre>, including indentation in your code -->
        </code>
        </pre>



    </div>

    <!-- Events id before "tables"-->
    <div class="docs-section" id="details">
        <h6 class="docs-header">Enchanting Bride Makeover</h6>
        <p>1th of may 2015</p>
        <p>Be sure you have confirmed before bringing food and drinks.</p>
        <div class="docs-event">
            <table class="u-full-width">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Confirmed</th>
                    <th>Food</th>
                    <th>Drinks</th>
                </tr>
                </thead>
                <tbody>
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





    </div>

    <!-- Locations id before "events" -->
    <div class="docs-section events" id="locations">
        <h6 class="docs-header">Here you find us</h6>
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