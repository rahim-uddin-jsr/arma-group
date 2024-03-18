
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->

<link rel="stylesheet" id="bootstrap-css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
    /* Carousel Fixed Height
Limit height on a carousel using inline background style
    */
    .slider-size {
        width: 100%;
        height: 600px;
        vertical-align: middle;
    }
    .carousel {
        margin-bottom: 0;
        padding: 0 40px 30px 36px !important;
    }
    .carousel-default {
        margin-bottom: 0;
        /*padding: 0 40px 0px 170px !important;*/
        padding: 0 40px 0px 170px;
        -webkit-transition: 0.4s ease-in-out left;
        -moz-transition: 0.4s ease-in-out left;
        -o-transition: 0.4s ease-in-out left;
        transition: 0.4s ease-in-out left;
    }
    /*.carousel-inner > .item {
        position: relative;
        display: none;
        -webkit-transition: 0.6s ease-in-out left;
        -moz-transition: 0.6s ease-in-out left;
        -o-transition: 0.6s ease-in-out left;
        transition: 0.6s ease-in-out left;
    }
    chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev {
        width: 24px;
        height: 30px;
        margin-top: -15px;
        font-size: 28px;
    }*/
</style>



<!-- Carousel Default -->
<section class="carousel-default">
    <div id="carousel-default slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-default" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-default" data-slide-to="1" class=""></li>
            <!--        <li data-target="#carousel-default" data-slide-to="2" class=""></li>
                    <li data-target="#carousel-default" data-slide-to="3" class=""></li>-->
            <!--<li data-target="#carousel-default" data-slide-to="2" class="active"></li>-->
        </ol>
        <div class="carousel-inner slider1" role="listbox">
            <div class="item active">
                <img src="{{ asset('assets/images/slider-img/arma_arshi_nagar_combined.png') }}" alt="First slide">
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/slider-img/arma_asma_garden_esha_moazzem2.jpg') }}" alt="Second slide">
            </div>

            <!--        <div class="item active">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/hearthand.jpg" alt="Third slide">
                      <div class="carousel-caption">
                        <h3>Making love</h3>
                        <p>She is probably taking a picture</p>
                      </div>
                    </div>-->
        </div>
        <!--      <a class="left carousel-control" href="#carousel-default" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-default" role="button" data-slide="next">
                <span class=" glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>-->
    </div>
</section>
<!-- /end Carousel Default -->


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
