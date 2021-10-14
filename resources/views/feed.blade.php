
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Magazine &mdash; Free Fully Responsive HTML5 Bootstrap Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">
    <!-- Google Fonts -->
    <link href={{ url('http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700')}} rel='stylesheet' type='text/css'>
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
<!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js')}}"></script>
    <![endif]-->
        <style>
            :root{
                --background: #2d3548;
                --text-light: rgba(255,255,255,0.6);
                --text-lighter: rgba(255,255,255,0.9);
                --spacing-s: 8px;
                --spacing-m: 16px;
                --spacing-l: 24px;
                --spacing-xl: 32px;
                --spacing-xxl: 64px;
                --width-container: 1200px;
            }

            *{
                border: 0;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .wrapper {
                display: flex;
                flex-direction: column;

            }
            .wrapper h2 {
                text-align: center;

            }
            html{
                height: 100%;
                font-family: 'Montserrat', sans-serif;
                font-size: 14px;
            }

            body{
                height: 100%;
            }

            .hero-section{
                align-items: flex-start;
                background-color: white;
                display: flex;
                min-height: 100%;
                justify-content: center;
                padding: var(--spacing-xxl) var(--spacing-l);
            }

            .card-grid{
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                grid-column-gap: var(--spacing-xxl);
                grid-row-gap: var(--spacing-xxl);
                max-width: var(--width-container);
                width: 100%;
            }

            @media(min-width: 540px){
                .card-grid{
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media(min-width: 960px){
                .card-grid{
                    grid-template-columns: repeat(4, 1fr);
                }
            }

            .card{
                list-style: none;
                position: relative;
                transition: all .4s;
                left: 0%;
                top: 0%
            }

            .card:before{
                content: '';
                display: block;
                padding-bottom: 150%;
                width: 100%;
            }

            .card__background{
                background-size: cover;
                background-position: center;

                bottom: 0;
                filter: brightness(0.75) saturate(1.2) contrast(0.85);
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                transform-origin: center;
                trsnsform: scale(1) translateZ(0);
                transition:
                    filter 200ms linear,
                    transform 200ms linear;
            }

            .card-grid:hover > .wrapper .card:hover {
                transform: scale(1.1)!important;
                z-index: 99999;

            }

            .card-grid:hover > .wrapper .card:not(:hover) .card__background{
                filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
            }

            .card__content{
                left: 0;
                padding: var(--spacing-l);
                position: absolute;
                top: 0;
            }

            .card__category{
                color: var(--text-light);
                font-size: 0.9rem;
                margin-bottom: var(--spacing-s);
                text-transform: uppercase;
            }

            .card__heading{
                color: var(--text-lighter);
                font-size: 1.9rem;
                text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
                line-height: 1.4;
                word-spacing: 100vw;
            }
        </style>
</head>
<body>
<div id="fh5co-offcanvas">
    <a href="{{ asset('.#')}}" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
    <div class="fh5co-bio">
        <figure>
            <img src="{{ asset('images/hesspress/mylogo.png')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
        </figure>
        <h3 class="heading">About Me</h3>
        <h2>Emily Tran Le</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        <ul class="fh5co-social">
            <li><a href="{{ asset('.#')}}"><i class="icon-twitter"></i></a></li>
            <li><a href="{{ asset('.#')}}"><i class="icon-facebook"></i></a></li>
            <li><a href="{{ asset('.#')}}"><i class="icon-instagram"></i></a></li>
        </ul>
    </div>

    <div class="fh5co-menu">
        <div class="fh5co-box">
            <h3 class="heading">Categories</h3>
            <ul>
                <li><a href="{{ asset('.#')}}">Hespress</a></li>
                <li><a href="{{ asset('.#')}}">Media 24</a></li>
                <li><a href="{{ asset('.#')}}">Tel quel</a></li>
                <li><a href="{{ asset('.#')}}">Food &amp; Drinks</a></li>
                <li><a href="{{ asset('.#')}}">Le matin</a></li>
            </ul>
        </div>
        <div class="fh5co-box">
            <h3 class="heading">Search</h3>
            <form action="..#')}}">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Type a keyword">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END #fh5co-offcanvas -->
<header id="fh5co-header">

    <div class="container-fluid">

        <div class="row">
            <a href="{{ asset('.#')}}" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <ul class="fh5co-social">
                <li><a href="{{ asset('.#')}}"><i class="icon-twitter"></i></a></li>
                <li><a href="{{ asset('.#')}}"><i class="icon-facebook"></i></a></li>
                <li><a href="{{ asset('.#')}}"><i class="icon-instagram"></i></a></li>
            </ul>
            <div class="col-lg-12 col-md-12 text-center">
                <h1 id="fh5co-logo"><a href="{{ asset('index.html')}}">Hespress <sup>FR</sup></a></h1>
            </div>

        </div>

    </div>

</header>
<!-- END #fh5co-header -->
<section class="hero-section">
    <div class="card-grid">
        @foreach ($admin as $item)
         {{-- <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
                <figure>
                    <a href="{{ $item->link}}"><img src="{!! $item->image !!}" alt="Image" class="img-responsive"></a>
                </figure>
                <span class="fh5co-meta"><a href="{{ asset('single.html')}}">Hespress</a></span>
                <h2 class="fh5co-article-title"><a href="{{ $item->link}}">{{ $item->title }}</a></h2>
                <span class="fh5co-meta fh5co-date">posted: {{ $item->date }}</span>
            </article>                        <h3 class="card__heading">{{ $item->title }}</h3>

            <div class="clearfix visible-xs-block"></div>--}}
            <div class="wrapper">
                <a class="card" href="#">
                    <div class="card__background" style="background-image: url({!! $item->image !!})"></div>
                    <div class="card__content">
                        <p class="card__category">Hespress</p>

                        <span class="">posted: {{ $item->date }}</span>

                    </div>

                </a>
           <h2 class="">{{ $item->title }}</h2>
            </div>
        @endforeach
    </div>


</section>


<div class="footer">
    <div class="inner-footer">

        <!--  for company name and description -->
        <div class="footer-items">
            <h1>Company Name</h1>
            <p>Description of any product or motto of the company.</p>
        </div>

        <!--  for quick links  -->
        <div class="footer-items">
            <h3 style="color: white;">Quick Links</h3>
            <div class="border1"></div> <!--for the underline -->
            <ul>
                <a href="#"><li>Home</li></a>
                <a href="#"><li>Search</li></a>
                <a href="#"><li>Contact</li></a>
                <a href="#"><li>About</li></a>
            </ul>
        </div>

        <!--  for some other links -->
        <div class="footer-items">
            <h3 style="color: white;">Recipes</h3>
            <div class="border1"></div>  <!--for the underline -->
            <ul>
                <a href="#"><li>Indian</li></a>
                <a href="#"><li>Chinese</li></a>
                <a href="#"><li>Mexican</li></a>
                <a href="#"><li>Italian</li></a>
            </ul>
        </div>

        <!--  for contact us info -->
        <div class="footer-items">
            <h3 style="color: white;">Contact us</h3>
            <div class="border1"></div>
            <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>XYZ, abc</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com</li>
            </ul>

            <!--   for social links -->
            <div class="social-media">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-google-plus-square"></i></a>
            </div>
        </div>
    </div>

    <!--   Footer Bottom start  -->
    <div class="footer-bottom">
        Copyright &copy; Food and Burps 2020.
    </div>
</div>



<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Main JS -->
<script src="{{ asset('js/main.js')}}"></script>

</body>
</html>

