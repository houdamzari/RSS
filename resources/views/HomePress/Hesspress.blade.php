
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NFE | Hespress</title>
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
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

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

       a {
           color:#f3ac2b;
       }
       a  .card__date {
           color: #f3ac2b!important;
           opacity: 1;
           font-size:17px;
           font-weight: lighter;
       }
       .flex{
           margin: 100px 0 100px 600px;
           font-size: 20px;
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
                <h1 id="fh5co-logo"><a href="{{ url('/Hesspress')}}">Hespress <sup>FR</sup></a></h1>
            </div>

        </div>

    </div>

</header>
<!-- END #fh5co-header -->
<section class="hero-section">
    <div class="card-grid">
        @foreach ($hespress as $item)
            <div class="wrapper">
                <a class="card" href="{{ $item->link}}">
                    <div class="card__background" style="background-image: url({!! $item->image !!})"></div>
                    <div class="card__content">
                        <p class="card__category">Hespress</p>

                        <span class="card__date"> {{ $item->date }}</span>

                    </div>

                </a>
                <h2 class="card-title">{{ $item->title }}</h2>
            </div>
        @endforeach
    </div>

</section>
{{ $hespress->links() }}



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

