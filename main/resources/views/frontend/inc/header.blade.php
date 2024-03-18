<!doctype html>
<html class="no-js" lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ARMA REAL ESTATE LIMITED @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->

    <!-- All CSS here -->
    <!-- bootstrap v3.3.6 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <!-- jquery-ui.min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.min.css') }}">
    <!-- bootstrap select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-select.min.css') }}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <!-- owl.carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
    <!-- bxslider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.bxslider.css') }}">
    <!-- slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-theme.css') }}">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/meanmenu.min.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <!-- modernizr CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('assets/frontend/css/new-bootstrap.min.css') }}">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
        .about-area {
            margin-right: 19px !important;
            margin-left: -28px !important;
        }

        .arel {
            margin-right: 19px !important;
            margin-left: -28px !important;
        }

        .advertise {
            margin-right: -32px !important;
            margin-left: -32px !important;
        }

        .about-area .text-left {
            margin-left: 1%;
        }

        .property-details-area section {
            padding: 0px !important;
            margin: 0px !important;
        }

        .col-md-12 col-sm-12 col-xs-12 floatright {
            padding: 0px !important;
            margin: 0px !important;
        }

        /*            .footer-last{
                width: 46% !important;
            }*/
        .text-right {
            text-align: left;
            margin-left: 79px !important;
        }

        .name {
            font-family: 'Bauhaus 93';
            color: #037329;
            padding-left: 0px;
        }

        header .header-v1 .header-navbar .main-menu nav ul>li>a {
            text-decoration: none;
        }

        .main-nav a {
            text-decoration: none;
        }

        element {}

        ul,
        ol {

            margin-top: 0;
            margin-bottom: 0px;

        }

        .container {
            padding-right: 15px;
            padding-left: 1px;

        }

        .header .header-navbar .header-logo img {
            height: 91px;
        }

        #head-iso {
            background-color: #9A0000 !important;
            color: #ffffff;
        }

        .head-iso {
            background-color: #9A0000 !important;
            color: #ffffff;
            text-align: left;
            padding-left: 205px !important;
        }


        .body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 15px;
            line-height: 1.5;
            color: #333;
        }

        .col-md-push-6 {
            left: 37.5%;
        }

        h1,
        .h1,
        h2,
        .h2,
        h3,
        .h3 {
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 1px;
        }

        .col-xs-1,
        .col-sm-1,
        .col-md-1,
        .col-lg-1,
        .col-xs-2,
        .col-sm-2,
        .col-md-2,
        .col-lg-2,
        .col-xs-3,
        .col-sm-3,
        .col-md-3,
        .col-lg-3,
        .col-xs-4,
        .col-sm-4,
        .col-md-4,
        .col-lg-4,
        .col-xs-5,
        .col-sm-5,
        .col-md-5,
        .col-lg-5,
        .col-xs-6,
        .col-sm-6,
        .col-md-6,
        .col-lg-6,
        .col-xs-7,
        .col-sm-7,
        .col-md-7,
        .col-lg-7,
        .col-xs-8,
        .col-sm-8,
        .col-md-8,
        .col-lg-8,
        .col-xs-9,
        .col-sm-9,
        .col-md-9,
        .col-lg-9,
        .col-xs-10,
        .col-sm-10,
        .col-md-10,
        .col-lg-10,
        .col-xs-11,
        .col-sm-11,
        .col-md-11,
        .col-lg-11,
        .col-xs-12,
        .col-sm-12,
        .col-md-12,
        .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-right: 1px;
            padding-left: 1px;
        }

        footer .last-v1 {
            background-color: #037329;
            color: #fff;
        }

        footer .footer-top {
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #9A0000;
        }

        .project-section {
            height: 330px;
        }

        .project-box {
            padding-bottom: 10px;
            background: #fff;
            box-shadow: 2px 0px 53px 13px #ddd;
        }

        .box-area {
            padding-bottom: 15px;
        }

        header .header-v1 .header-navbar .main-menu nav ul>li>ul {
            background: #037329;
            margin-top: 4px;
        }

        a:hover,
        a:focus {

            color: #037329;
            text-decoration: none;

        }

        footer .footer-last p {
            margin: 0;
            font-size: 14px;
            padding: 0px 0;
        }

        footer .footer-top .footer-about img {
            height: 70%;
            width: 55%;
        }

        .footer-content-area {
            padding-left: 0px !important;
            padding-right: 0px !important;
            margin-left: -1px !important;
            margin-right: 0px !important;
        }

        .col-lg-6 col-md-6 col-sm-12 col-xs-12 {
            padding: 0px;
            margin: 0px;
            width: 47% !important;
            float: left;
        }

        @media screen and (max-width: 540px) {
            .head-iso {
                background-color: #9A0000 !important;
                color: #ffffff;
                text-align: left;
                padding-left: 0px !important;
            }

            .carousel-default {
                margin-bottom: 0;
                padding: 0 0px 0px 0px !important;
            }

            .carousel {
                margin-bottom: 0;
                padding: 0 0px 24px 0px !important;
            }
        }

        @media screen and (max-width: 370px) {
            .head-iso {
                background-color: #9A0000 !important;
                color: #ffffff;
                text-align: left;
                padding-left: 30px !important;
            }

            .carousel {
                margin-bottom: 0;
                padding: 0 0px 24px 0px !important;
            }

            .carousel-default {
                margin-bottom: 0;
                padding: 0 0px 0px 0px !important;
            }
        }

        @media screen and (max-width: 300px) {
            .head-iso {
                background-color: #9A0000 !important;
                color: #ffffff;
                text-align: left;
                padding-left: 0px !important;
            }

            .carousel {
                margin-bottom: 0;
                padding: 0 0px 22px 0px !important;
            }

            .carousel-default {
                margin-bottom: 0;
                padding: 0 0px 0px 0px !important;
            }

            .text-center {
                text-align: center;
                padding-left: 30px;
            }

            .section-heading-v1 h3,
            .section-heading-v1 h2 {
                font-size: 22px;
                text-transform: uppercase;
                margin-left: -7px;
            }

            .property-details-area .single-descrip p.out-mar {
                margin: 15px;
            }

            .single-descrip h3 {
                margin-left: 15px;
            }

            footer .footer-top .footer-content-area h4 {
                text-align: center;
            }



        }
    </style>

</head>

<body>


    <!-- Header Area -->
    <header>
        @include('frontend.inc.header-top')
        @include('frontend.inc.navigation')


    </header><!-- /Header Area -->
