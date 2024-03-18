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
                        <h3><span>Upcoming</span> Projects</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <br />
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <a href="arma_lake_castle.php"><img src="{{asset('assets/images/all-project/upcomming-project/Arma-Lake-Castle-1.png') }}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> Lake Castle</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <a href="arma_howlader_tower.php"><img
                            src="{{asset('assets/images/all-project/upcomming-project/arma-howlader-tower.jpg') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span> Howlader Tower</b></h4>
                    </a>
                </div>
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
