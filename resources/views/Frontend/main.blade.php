<!DOCTYPE html>

<html lang="en-US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Theme Starz">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link  rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vanillabox/vanillabox.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/layerslider.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}" >

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" >

    <title>INFORMATION SYSTEMS AND INNOVATION</title>

</head>

<body class="page-homepage-courses">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
<div class="navigation-wrapper">
    <div class="secondary-navigation-wrapper1">
        <div class="container">
           <center>
             <h2><strong>INFOMATION SYSTEMS AND DIGITAL INNOVATION (ISDI) RESEARCH GROUP</strong></h2>
           </center>
        </div>
    </div><!-- /.secondary-navigation -->

    <div class="secondary-navigation-wrapper">
        <div class="container">
           <center>
             <h2><strong>UNIVERSITY OF DAR ES SALAAM</strong></h2>
           </center>
        </div>
    </div><!-- /.secondary-navigation -->
    <div class="primary-navigation-wrapper">
        <header class="navbar" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">      
                    <div class="navbar-brand nav" id="bra.nd">
                        <a href="/"><img src="{{asset('img/udsm.png')}}" alt="brand" style="height: 100px"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-left" role="navigation">
                    <ul class="nav navbar-nav">
                         <li><a href="/">Home</a></li>
                         <li><a href="/research">Research</a></li>
                         <li><a href="/activities">Activities</a></li>
                         <li><a href="#">Offered Services</a></li>
                         <li><a href="/publication">Publications</a></li>
                         <li> <a href="#" class=" has-child no-link">Group Members</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="/members">Leaders</a></li>
                                <li><a href="/researcher">Researchers</a></li>
                                <li><a href="/student">Research student</a></li>
                               
                            </ul>
                         </li>
                         <li><a href="/about_us">About us</a></li>
                    </ul>
                </nav><!-- /.navbar collapse-->
            </div><!-- /.container -->
        </header><!-- /.navbar -->
    </div><!-- /.primary-navigation -->
    <div class="background">
        <img src="{{asset('img/background-city.png')}}"  alt="background">
    </div>
</div>
<!-- end Header -->

@yield('contents')

<!-- Footer -->
<footer id="page-footer">
    <section id="footer-top">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-social">
                    <figure>Follow us:</figure>
                    <div class="icons">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-youtube-play"></i></a>
                    </div><!-- /.icons -->
                </div><!-- /.social -->
               
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-top -->

    <section id="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <aside class="logo">
                        <img src="{{asset('img/udsm.png')}}" class="vertical-center">
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Contact Us</h4></header>
                        <address>
                            <strong>University of Dar es salaam</strong>
                            <br>
                            <span>COICT KIJITONYAMA</span>
                            <br><br>
                            <span>Information system and innovation</span>
                            <br>
                            <abbr title="Telephone">Telephone:</abbr> +255 (0) 788 835 883
                            <br>
                            <abbr title="Email">Email:</abbr> <a href="#">mathewmndeme@udsm.ac.tz</a>
                        </address>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Important Links</h4></header>
                        <ul class="list-links">
                            <li><a href="#">Profects tools</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Publications</a></li>
                            <li><a href="#">Group members</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Research</a></li>
                        </ul>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>About our Group</h4></header>
                        <p>Aliquam feugiat turpis quis felis adipiscing, non pulvinar odio lacinia.
                            Aliquam elementum pharetra fringilla. Duis blandit, sapien in semper vehicula,
                            tellus elit gravida odio, ac tincidunt nisl mi at ante. Vivamus tincidunt nunc nibh.
                        </p>
                        <div>
                            <a href="" class="read-more">All News</a>
                        </div>
                    </aside>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="background"><img src="{{asset('img/background-city.png')}}" class="" alt=""></div>
    </section><!-- /#footer-content -->

    <section id="footer-bottom">
        <div class="container">
            <div class="footer-inner">
                <div class="copyright">©drmethewmndeme, All rights reserved</div><!-- /.copyright -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-bottom -->

</footer>
<!-- end Footer -->

</div>
<!-- end Wrapper -->

<script type="text/javascript" src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/selectize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.placeholder.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jQuery.equalHeights.js')}}"></script>
<script type="text/javascript" src="{{asset('js/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.vanillabox-0.1.5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.tablesorter.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/greensock.js')}}"></script>
<script type="text/javascript" src="{{asset('js/layerslider.transitions.js')}}"></script>
<script type="text/javascript" src="{{asset('js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/retina-1.1.0.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

</body>
</html>