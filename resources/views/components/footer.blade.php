<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    {{-- <link rel="shortcut icon" href="{{ asset ('assets/images/logo5.png')}}" type="image/x-icon">--}}
    <meta name="description" content="">


    <title>footer</title>
    <link rel="stylesheet" href="{{ asset ('assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/theme/css/style.css')}}">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
    <link rel="preload" as="style" href="{{ asset ('assets/mobirise/css/mbr-additional.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/mobirise/css/mbr-additional.css')}}" type="text/css')}}">

    <style>
        .footer{
            margin: 0;
            height: 270px;
            width: 100%;
            padding: 30px 10px 20px 20px;
            position: absolute;
            background-image: linear-gradient(to top, #0c3483 0%, #a2b6df 100%, #6b8cce 100%, #a2b6df 100%);
            bottom: 0;

        }
        .inner-footer{
            display: flex;
            flex-direction: row;
            gap: 300px;
            position:absolute;
            bottom: 0;
            padding-top: 30px;
            padding-bottom: 10px;
            margin-top: 100px;

        }
        .border1 {
            height: 3px;
            width: 40px;
            background: #5271FF;
            color: #ff9800;
            background-color: #5271FF;
            border: 0px;
        }
        ul {
            list-style: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 0.5px;
        }

        ul a {
            text-decoration: none;
            outline: none;
            color: #fff;
            transition: 0.3s;
        }

        ul a:hover {
            color: #ff9800;
        }

        ul li {
            margin: 10px 0;
            height: 25px;
        }

        li i {
            margin-right: 20px;
        }

        .footer-items p {
            width: 50%;
            font-size: 20px;
            text-align: justify;
            line-height: 25px;
            color: #fff;
        }

        .footer-items h1 {
            color: #fff;
        }
        .social-media {
            width: 100%;
            color: #fff;
            text-align: center;
            font-size: 20px;
        }

        .social-media a {
            text-decoration: none;
        }

        .social-media i {
            height: 25px;
            width: 25px;
            margin: 20px 10px;
            padding: 4px;
            color: #fff;
            transition: 0.5s;
        }

        .social-media i:hover {
            transform: scale(1.5);
        }
    </style></head>
<body>

<div class="footer">
    <div class="inner-footer">

        <!--  for company name and description -->
        <div style="margin-left:200px; " class="footer-items">
            <h1>Le 360</h1>
            <p>Description of any product or motto of the company.</p>
        </div>

        <!--  for contact us info -->
        <div class="footer-items">
            <h3 style="color: white;">Contactez nous</h3>
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

</div>
</body></html>
