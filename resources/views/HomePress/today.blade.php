
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NFE | Aujourd'hui</title>
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
        @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap');

        :root{
            --background: #2d3548;
            --text-light: rgba(255,255,255,0.6);
            --text-lighter: rgba(255,255,255,0.9);
            --spacing-s: 8px;
            --spacing-m: 16px;
            --spacing-l: 24px;
            --spacing-xl: 32px;
            --spacing-xxl: 60px;
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
            width: auto!important;
        }
        .wrapper h2 {
            text-align: center;

        }
        html{
            height: 100%;
            font-size: 62.5%;
        }

        body{
            height: 100%;
        }

        .hero-section{
           position: relative;
            padding: var(--spacing-xxl) var(--spacing-l);
            left: 48.3%;
            transform: translateX(-47%);
        }

        .card-grid{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-column-gap: var(--spacing-xxl);
            grid-row-gap: var(--spacing-xxl);

            width: 100%;
        }

        @media(min-width: 550px){
            .card-grid{
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media(min-width: 960px){
            .card-grid{
                grid-template-columns: repeat(4, 1fr);
            }
        }
        .date{
            position: absolute;
            margin-top: 130px;
            margin-left:10px ;
        }
        .card{
            list-style: none;
            position: relative;
            transition: all .4s;
            left: 0%;
            top: 0%;
            z-index:-1;
        }

        .card:before{
            content: '';
            display: block;
            padding-bottom: 30%;
            width: 100%;
        }



        .card-grid:hover > .wrapper .card:hover {
            transform: scale(1.1)!important;
            z-index: 99999;

        }

        .card-grid:hover > .wrapper .card:not(:hover) .card__background{
            filter: brightness(0.5) saturate(0) contrast(1.2) ;
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
            margin-top: 3rem;
            font-size: 2.5rem;
            text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
            line-height: 1.4;
            width: 80%;
        }
         .card_picture {
             background-size: cover;
             background-position: center;
             position: relative;
             object-fit: cover;
             width: 250px;
             height: 350px;

         }
         .card_picture > img {

            position: absolute;
            width: 100%;
            height: 100%;
             filter: brightness(0.75) saturate(1.2) contrast(0.85);
             transform-origin: center;
             transform: scale(1) translateZ(0);
             transition:
                 filter 200ms linear,
                 transform 200ms linear;
        }
        .h1{
            color: #1a202c;
            font-size: 40px;
            z-index:999;
            position: absolute;
margin-left: 40%;
        margin-bottom: 100px;
        font-weight: lighter;}


        /* you can toggle the media screen view accordingly by changing the (max-width: px) to your convenience */

        /* Thanks to Computer Conversations */</style>
</head>
<body>
<div id="fh5co-offcanvas">
    <a href="{{ asset('.#')}}" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
    <div class="fh5co-bio">
        <figure>
            <img src="{{ asset('images/hesspress/mylogo.png')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
        </figure>
        <h3 class="heading">WHO ARE WE ?</h3>
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
                <li><a href="{{ url('/Hesspress')}}">Hespress</a></li>
                <li><a href="{{ url('/France24')}}">France 24</a></li>
                <li><a href="{{ url('/telquel')}}">Tel quel</a></li>
                <li><a href="{{ asset('/360')}}">360</a></li>
                <li><a href="{{ asset('/today')}}">Aujourd'hui</a></li>
                <li><a href="{{ asset('/lavieco')}}">La vie eco</a></li>

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
<!-- END menu -->
<header id="fh5co-header">

    <div class="container-fluid">

        <div class="row">
            <a href="{{ asset('.#')}}" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <ul class="fh5co-social">
                <li><a href="{{ asset('.#')}}"><i class="icon-twitter"></i></a></li>
                <li><a href="{{ asset('.#')}}"><i class="icon-facebook"></i></a></li>
                <li><a href="{{ asset('.#')}}"><i class="icon-instagram"></i></a></li>
            </ul>
            <div class="">
                <h1  class="h1" id="">Aujourd'hui <sup>Mr</sup></h1>
            </div>

        </div>

    </div>

</header>
<!-- END #fh5co-header -->
<section class="hero-section">
    <div class="card-grid">
        @foreach ($media as $item)
            <div class="wrapper">
                <a class="card" href="#">
                    <a class="card_picture" href="{{ $item->link}}">{!! $item->image !!}</a>
                    <a style=" color: #f3ac2b!important;
            opacity: 1;
            font-size:17px;
            font-weight: lighter;z-index: 99999;margin-top: -300px;margin-left: 20px;margin-bottom: 300px;" class="card__date">{{ $item->date }}</a>

                    <div class="card__content">
                        <p class="card__category">Aujourd'hui</p>

                   </div>

                    <h2 class="card__heading">{{ $item->title }}</h2>

                </a>
            </div>
        @endforeach
    </div>


</section>


<div style="height: 200px;width: 100%;"></div>@include('components.footer');




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

