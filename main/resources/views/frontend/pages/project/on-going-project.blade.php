@extends('layouts.app')
@section('content')



<style>
    .container {
        padding-bottom: 20px;
    }

    .gallery-title {
        font-size: 36px;
        color: #037329;
        text-align: center;
        font-weight: 500;
        margin-bottom: 70px;
    }

    .gallery-title:after {
        content: "";
        position: absolute;
        width: 7.5%;
        left: 46.5%;
        height: 45px;
        border-bottom: 1px solid #5e5e5e;
    }

    .filter-button {
        font-size: 18px;
        border: 1px solid #037329;
        border-radius: 5px;
        text-align: center;
        color: #037329;
        margin-bottom: 30px;
    }

    .filter-button:hover {
        font-size: 18px;
        border: 1px solid #037329;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        background-color: #037329;
    }

    .btn-default:active .filter-button:active {
        background-color: #42B32F;
        color: white;
    }

    .port-image {
        width: 100%;
    }

    .gallery_product {
        margin-bottom: 45px;
        max-height: 440px;
        min-height: 207px;
    }

    .product_feature {
        position: relative;
        width: 100%;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .product_feature:hover .overlay {
        opacity: 0.8;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        /*background-color: #008CBA;*/
        background-color: #fff;
    }

    .text {
        color: #004AB9;
        font-weight: bold;
        font-size: 15px;
        position: absolute;
        top: 50%;
        left: 55%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        /*text-align: center;*/
        text-align: left;
        width: 100%;

    }

    .h4 .b {
        text-decoration: none;
    }

    .img-responsive,
    .thumbnail>img,
    .thumbnail a>img,
    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
        max-height: 440px !important;
        height: 440px !important;
        width: 380px !important;
    }

    @media screen and (max-width: 480px) {

        .img-responsive,
        .thumbnail>img,
        .thumbnail a>img,
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            height: 220px !important;
            width: 190px !important;
        }
    }

    .project-header {
        padding-left: 12px;
        padding-bottom: 15px;
    }

    .gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe {
        padding-bottom: 15px;
    }

    </style>

    <!------ Include the above in your HEAD tag ---------->
    <section class="properties-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="section-heading-v1 text-center">
                        <h3><span>On Going</span> Projects</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <div class="product_feature">
                        <a href="arma_arshi_nagar.php"><img src="{{asset('assets/images/all-project/ongoing-project/arma-arshi-nagar.png') }}"
                                class="img-responsive">
                            <div class="overlay">
                                <div class="text">
                                    <h4 style="font-weight: bold;">Special Feature</h4>
                                    <br>
                                    <ul style="text-align: left;">
                                        <li>01. Community Space </li>
                                        <li>02. Executive Lounge </li>
                                        <li>03. Medicine Corner </li>
                                        <li>04. ATM Booth: </li>
                                        <li>05. Fire Protection System (UL Listed Equipment) </li>
                                        <li>06. Super Shop </li>
                                        <li>07. Modern Security System</li>
                                        <li>08. Prayer Hall</li>
                                        <li>09. Gymnasium</li>
                                        <li>10. Landscape</li>
                                        <li>11. Children paly Ground</li>
                                        <li>12. Laundry</li>
                                        <li>13. Saloon</li>
                                        <li>14. Bakery & Coffee Shop</li>
                                        <li>15. Geust Car Parking Facilities</li>
                                    </ul>
                                </div>
                            </div>
                            <h4>
                            <b>
                            <!--<span class="name">ARMA</span> Arshi Nagar</b></h4>-->
                            <span class="name">ARMA</span> ARSHINAGAR, BANASREE</b></h4>
                        </a>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_asma_garden.php"><img
                            src="{{asset('assets/images/all-project/ongoing-project/Arma_Asma-Gerden_Banasree.png') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span>  ASMA GARDEN, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img
                            src="{{asset('assets/images/all-project/ongoing-project/ARMA_JANNAT_VILLA_AFTABNAGAR_BADDA.png') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span>  JANNAT VILLA, AFTABNAGAR</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_royal_villa.php"><img
                            src="{{asset('assets/images/all-project/ongoing-project/ARMA_Royal_Villa.png') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span>  ROYAL VILLA, AFTABNAGAR</b></h4>
                    </a>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <div class="product_feature">
                        <a href="arma_aliya_garden.php">
                            <img src="{{asset('assets/images/all-project/ongoing-project/ARMA_Aliya_Garden.png') }}" class="img-responsive">
                            <h4><b><span class="name">ARMA</span> ALIYA GARDEN, AFTABNAGAR</b></h4>
                        </a>
                    </div>

                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{asset('assets/images/all-project/ongoing-project/ARMA_Lake_Caslte.jpg') }}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> LAKE CASTEL, AFTABNAGAR</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{asset('assets/images/all-project/ongoing-project/Tasnim_Paradise_3D .jpg') }}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> TASNIM PARADISE, AFTABNAGAR</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> LIMA COTTEAGE, AFTABNAGAR</b></h4>
                    </a>
                </div>
                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">-->
                <!--    <div class="product_feature">-->
                <!--        <a href="arma_royal_villa.php">-->
                <!--            <img src="{{ asset('assets/images/all-project/ongoing-project/ARMA_Royal_Villa.png') }}" class="img-responsive">-->
                <!--            <h4><b><span class="name">ARMA</span> Royal Villa</b></h4>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->

                <br>
            </div>
        </div>

    </section>

    <script>
    $(document).ready(function() {

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');

            if (value == "all") {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1500');
            } else {
                //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });
    </script>

@endsection
