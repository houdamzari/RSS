<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href= {{ asset('css/styles.css')}}>
    <style>
        li > * {
            line-height: 1px!important;
        }
        .accordion .card {
            color: #fff;
            border: none;
            background: transparent;
            margin-left: -30px;
        }
        .accordion .card a {
            color: #424e5d;
            text-decoration: none;
        }
        .accordion .card-header {
            background: transparent;
            padding: .75rem 1rem;
            position: relative;
            border: none;

        }
        .accordion .card-header h2 {
            font-size: 0.98rem;
        }
        .accordion .fa {
            width: 20px;
            margin-right: .25rem;
        }
        .accordion .card-header a {
            float: left;
            width: 100%;
            cursor: pointer;
        }
        .accordion .toggle {
            font-size: .7rem;
            line-height: .5rem;
            cursor: pointer;
            opacity: 0.7;
            position: absolute;
            right: 16px;
            top: 16px;
            width: 14px;
            margin: 0;
        }
        .accordion .toggle:hover {
            opacity: 1;
        }
        .accordion .card-body {
            padding: 0;
            text-align: center;
        }
        .accordion .list-group-item {
            border-radius: 0;
            border-width: 1px 0 1px 0;
            padding-left: 30px;
            font-weight: 500;
            background: transparent;
            border: none;
        }
        .accordion .list-group-item:hover a {
            color: white !important;
        }
        .accordion .list-group-item:hover .badge{
            color: #007bff;
        }
        .accordion .list-group-item a {
            color: #61656b;
            display: block;
                       font-size: 15px;

        }
        .accordion .list-group-item .badge {
            float: right;
            min-width: 36px;
        }
        .accordion .rotate{
            transform: rotate(180deg);
        }
    </style>
</head>

<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4">
            <h1><a href="index.html" class="logo">NFE </a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="{{ url('/Admin-Add') }}"><span class="fa fa-home mr-3"></span> ADD RSS</a>
                </li>
                <li>
                   <div>
                      {{--<a href="#"><span class="fa fa-user mr-3"></span> Articles management</a>--}}
                       <div class="col-md-12">
                           <div class="accordion mb-2" id="accordionExample">
                               <div class="card">
                                   <div class="card-header" id="headingOne">
                                       <h2 class="mb-0">
                                           <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                               <span><i class="fa fa-user"></i> Account</span>
                                               <i class="fa fa-chevron-down toggle"></i>
                                           </a>
                                       </h2>
                                   </div>
                                   <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                       <div class="card-body">
                                           <ul class="list-group">
                                               <li class="list-group-item"><a href="{{url('/HesspressDelete')}}">Hesspress</a></li>
                                               <li class="list-group-item"><a href="{{url('/telquel')}}"> Tel Quel</a></li>
                                               <li class="list-group-item"><a href="{{url('/France24')}}" ></i>France 24</a></li>
                                               <li class="list-group-item"><a href="{{url('/360')}}" ></i>Le 360</a></li>
                                               <li class="list-group-item"><a href="{{url('/today')}}" ></i>Aujourd'hui</a></li>
                                               <li class="list-group-item"><a href="{{url('/lavieco')}}" ></i>La vie eco</a></li>
                                               <li class="list-group-item"><a href="{{url('/dailymail')}}" ></i>Daily Mail</a></li>
                                               <li class="list-group-item"><a href="{{url('/TheIndependant')}}" ></i>The Independant</a></li>
                                               <li class="list-group-item"><a href="{{url('/skynews')}}" ></i>SkyNews</a></li>
                                               <li class="list-group-item"><a href="{{url('/rt')}}" ></i>Rt</a></li>
                                               <li class="list-group-item"><a href="{{url('/telegraph')}}" ></i>Telegraph</a></li>

                                           </ul>
                                       </div>
                                   </div>
                               </div></div></div></div>
                </li>
                <li>
                    <a href="{{url('/')}}"><span class="fa fa-briefcase mr-3"></span> Portfolio</a>
                </li>

            </ul>



            <div class="footer">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 style="margin-left:40%;" class="mb-2">RSS Generator</h2>
        <div class="container">
            <form style="margin-top:160px;" action="/store" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <input style="background-color: #6b8cce;opacity: 0.2;color:black;" type="text" class="form-control" name="rss" placeholder="Enter an rss website">

                </div>


                <button style="margin-left:45%;margin-top:10px;background-color: #6b8cce;" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
