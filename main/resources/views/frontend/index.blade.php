@extends('layouts.app')
@section('title') {{'Home'}} @endsection
@section('content')
@include('frontend.inc.slider')
<style>
    .h4 .b {
        text-decoration: none;
    }

    .col-md-offset-2 {
        margin-left: 2%;
    }

    </style>
    <section class="properties-area section">
        <!--<div class="container" style="background-color: #00CDFF; padding: 0px;">-->
        <div class="container" style="padding: 0px;">
            <div class="row about-area">
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12 text-left">
                    <div class="section-heading-v1 text-center">
                        <h3 style=" font-weight: bold;"><span>About</span> Us</h3>
                    </div>
                </div>
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12" style="padding: 5px;">
                    <div class="section-heading-v1 text-center">
                        <div style="text-align: justify"> <span class="name">ARMA GROUP</span> of companies is a growing
                            business concern in Bangladesh. The company started its operation by the name of ARMA Electric
                            Company in 1985.With the passage of time; several other companies were established under <span
                                class="name">ARMA GROUP</span> of Companies to contribute to the
                            economic development of the country. Today <span class="name">ARMA GROUP</span> stands as one of
                            the rapidly expanding organizations in the field of Agriculture,
                            Real Estate, Infrastructure Development, Power and Education. The group is now working together
                            with its seven sister concerns.
                            Today <span class="name">ARMA GROUP</span> is one of the leading conglomerates of Bangladesh.
                            Since inception, the company stands on the idea of fairness,honesty and general concern to its
                            customers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="property-details-area section">
        <div class="container" style="background-color: #fff">
            <div class="row areal">
                <!--<div class="col-md-12 col-sm-12 col-xs-12 float-left">-->
                <div class="single-descrip">
                    <h3><a class="name" style="font-size: 24px; padding-left: 0px; font-weight: bold;">ARMA</a> Real Estate
                        Ltd.</h3>
                    <p class="out-mar" style="text-align: justify; padding: 0px;">
                        <a class="name" style="font-size: 15px;">ARMA</a> Real Estate Ltd. is a disciplined firm engaged in
                        different activities related to Real Estate and property development with strong working knowledge
                        in the area of development and construction. The company was formed in 2006 and continued to grow in
                        size and diversity. We are successfully developing commercial & residential projects in a number of
                        different locations. We had continued to make a positive impact in all its projects and have
                        utilized these experiences to benefit consumers and associates.
                        <br>
                    </p>
                    <p class="out-mar" style="text-align: justify; padding: 0px;">
                        We have an enduring commitment to quality and apartment owner satisfaction, which is the foundation
                        of every apartment we build. Your dream, combined with our expertise, creates the perfect balance
                        between plan and task. Every apartment is a masterpiece of quality workmanship, built carefully with
                        detailed attention that is second to none.
                        <br>
                    </p>
                    <p class="out-mar" style="text-align: justify; padding: 0px;">With a wide range of ready to move in
                        apartments, independent villas, penthouses and luxury apartments, now buy homes which suit your
                        budget and taste.</p>
                </div>
                <!--</div>-->
            </div>
        </div>
    </section>
    <!--<section class="properties-area section" >
        <div class="container" style="background-color: #e8e8e8; padding: 0px;">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12" style="background-color: #037329; padding-top: 0px; margin-top: 0px">
                    <div class="section-heading-v1 text-center">
                        <h3 style="padding-top: 5px; margin-top: 5px"><span>Our</span> Projects</h3>
                    </div>
                </div>
            </div>
            <div class="row project-section">
                <div class="col-md-4 col-sm-6 col-xs-12 project-box">
                    <a href="project.php">
                        <figure class="box-area">
                            <img src="{{ asset('assets/images/slider-img/arma_arshi_nagar_combined.png') }}all-project/completed-project.jpg" alt="" href="project.php">
                            <h4 class="text-center"><b><span class="name">Completed</span> Project</b></h4>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 project-box">
                    <a href="project.php">
                        <figure class="box-area">
                            <img src="{{ asset('assets/images/slider-img/arma_arshi_nagar_combined.png') }}all-project/on-going-project.jpg" href="project.php" href="project.php" alt=""/>
                            <h4 class="text-center"><b><span class="name">On Going</span> Project</b></h4>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 project-box">
                    <a href="project.php">
                        <figure class="box-area">
                            <img src="{{ asset('assets/images/slider-img/arma_arshi_nagar_combined.png') }}all-project/up-comming-project.jpg" href="project.php" alt=""/>
                            <h4 class="text-center"><b><span class="name">Up Comming</span> Project</b></h4>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </section>-->
    <style>
    .carousel {
        margin-bottom: 0;
        padding: 0 40px 30px 40px;
    }

    /* The controlsy */
    .carousel-control {
        left: -12px;
        height: 40px;
        width: 40px;
        background: none repeat scroll 0 0 #222222;
        border: 4px solid #FFFFFF;
        border-radius: 23px 23px 23px 23px;
        /*margin-top: 90px;*/
        margin-top: 196px;
    }

    .carousel-control.right {
        right: -12px;
    }

    /* The indicators */
    .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: -10px;
        margin-right: -19px;
    }

    /* The colour of the indicators */
    .carousel-indicators li {
        background: #cecece;
    }

    .carousel-indicators .active {
        background: #428bca;
    }

    </style>





    <section class="properties-area section">
        <div class="container">
            <div class="row advertise">
                <div class="col-md-12 col-sm-12 col-xs-12" style=" padding-top: 0px; margin-top: 0px">
                    <div class="section-heading-v1 text-center">
                        <h3 style="padding-top: 5px; margin-top: 5px; font-weight: bold;"><span>On Going</span> Projects
                        </h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/advertise/arma_arshi_nagar-1.png') }}"
                                                alt="arma arshi nagar" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/advertise/arma_arshi_nagar-2.png') }}"
                                                alt="arma arshi nagar 2" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->


                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/advertise/arma_asma_garden-1.jpg') }}"
                                                alt="arma asma garden" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/advertise/arma_esha_moazzem_nibash-1.jpg') }}"
                                                alt="arma esha moazzem nibash.jpg" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->


                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/advertise/ARMA_Aliya_Garden.png') }}"
                                                alt="arma aliya garden" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/advertise/ARMA_Royal_Villa.png') }}"
                                                alt="arma royal villa" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
        <!--.container-->
        <br>
    </section>

    <section class="properties-area section">
        <div class="container" style="background-color: #e8e8e8; padding: 0px;">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12"
                    style="background-color: #037329; padding-top: 0px; margin-top: 0px">
                    <div class="section-heading-v1 text-center">
                           <!--<img src="images/photo-gallery/banner.jpg" >-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
