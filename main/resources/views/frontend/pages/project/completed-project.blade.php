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
                        <h3><span>Completed </span> Projects</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <!--            <div align="left" class="project-header">
                    <button class="btn btn-default filter-button" data-filter="all">All Project</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Completed Project</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">On Going Project</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle"></button>
                    <button class="btn btn-default filter-button" data-filter="spray">Up Comming Project</button>
                </div>-->
                <br />
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::">
                        <a href="javascript::">
                            {{-- <img src="{{ asset('assets/images/all-project/completed-project/ARMA_COMPLEX_BANASREE.png') }}" class="img-responsive"> --}}

                            <img src="{{ asset('assets/images/all-project/completed-project/ARMA_COMPLEX_BANASREE.png') }}" class="img-responsive">
                            <h4><b><span class="name">ARMA</span> COMPLEX, BANASREE</b></h4>
                        </a>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_mohona.php "><img src="{{ asset('assets/images/all-project/completed-project/arma-mohona.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> MOHONA, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::">
                        <!--<img src="{{ asset('assets/images/all-project/completed-project/arma-angon.jpg') }}" class="img-responsive">-->
                        <img src="') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span> ESHA KANON, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/4.ARMA LAKE VIEW.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> LAKE VIWE, MIRPUR DOHS</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/5.Arma prottasa.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> PRATTASHA, UTTRA</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/6.Arma Majeda malik tower.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> MAJEDA MALIK TOWER, PROGATI SARANI, BADDA (MAIN ROAD)</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/7.Arma shaily.JPG')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> SHOILY, GULSHAN LINK ROAD</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_shapla.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-shapla.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> SHAPLA, GULSHAN LINK ROAD</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_noori_nibash.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-noori-nibash.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> NOORI NIBASH, BADDA SATARKUL ROAD</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_darul_abrar.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-darul-abrar.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> DARUL ABRAR, KHILGAON</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::">
                        <!--<img src="{{ asset('assets/images/all-project/completed-project/arma-alam-nibash.jpg') }}" class="img-responsive">-->
                        <img src="') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span> AMZAD BITHIKA, MERUL BADDA</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::">
                        <!--<img src="{{ asset('assets/images/all-project/completed-project/arma-darul-abrar.jpg') }}" class="img-responsive">-->
                        <img src="') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span> SENJUTI, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::">')}}asset('assets/images/all-project/completed-project/13.Arma Suchana.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> SUCHANA, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/14.Arma binti kutir.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> BINTI KUTHIR, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/15.Armakunje kiron.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> KUNJE KIRON, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/16.Arma angon.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> ANGAN, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_bilash.php"><img src="{{ asset('assets/images/all-project/completed-project/17.Arma bilash.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> BILASH, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <!--<a href="arma_wazi_nibash.php">-->
                    <a href="javascript::">
                        <img src="{{ asset('assets/images/all-project/completed-project/wazi-nibash.jpg') }}" class="img-responsive">
                        <!--<img src="') }}" class="img-responsive">-->
                        <h4><b><span class="name">ARMA</span> WAZI NIBASH, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_khonika.php"><img src="{{ asset('assets/images/all-project/completed-project/19.Arma khonika.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> KHONIKA, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_jesmin_garden.php"><img src="{{ asset('assets/images/all-project/completed-project/jesmin-garden.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> JESMIN GARDEN, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/21.ARMA KHAWAJA-0.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> KHAWZA GARDEN, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_yuri.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-yuri.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> YURI, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::">
                        <img src="{{ asset('assets/images/all-project/completed-project/SHAMIMA_GARDEN.jpeg') }}" class="img-responsive">
                        <!--<img src="') }}" class="img-responsive">-->
                        <h4><b><span class="name">ARMA</span> SHAMIMA GARDEN, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::">
                        <img src="{{ asset('assets/images/all-project/completed-project/24.Arma madhobee.JPG') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span> MADHOBI, BANASREE</b></h4>
                    </a>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/arma-jamila-garden.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> JAMILA GARDEN, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <!--<a href="arma_jaimush_garden.php">-->
                    <a href="javascript::">
                        <img
                            src="images/all-project/completed-project/arma-jaimush-garden-nc.jpg') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span> JAIMUSH GARDEN, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_shely.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-shely.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> SHELY, BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img src="{{ asset('assets/images/all-project/completed-project/28.Arma salma vila.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> SALMA GARDEN, BANASREE</b></h4>
                    </a>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_badhon.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-badhon.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> BADHON, SOUTH BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="project_arma_alam_nibash.php">
                        <a href="arma_alam_nibash.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-alam-nibash.jpg')}}"
                                class="img-responsive">
                            <h4><b><span class="name">ARMA</span> ALAM NIBASH, SOUTH BANASREE</b></h4>
                        </a>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_suraiya_garden.php"><img
                            src="images/all-project/completed-project/arma-suraiya-garden.jpg') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span> SURAIYA GARDEN, SOUTH BANASREE</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_ferdaousi_villa.php"><img
                            src="images/all-project/completed-project/arma-ferdousi-villa.jpg') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span> FERDOUSI VILLA, AFTABNAGAR</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="javascript::"><img
                            src="images/all-project/completed-project/33.Arma NASRIN Villa.jpg') }}" class="img-responsive">
                        <h4><b><span class="name">ARMA</span> NASRIN VILLA, AFTABNAGAR</b></h4>
                    </a>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_monika.php "><img src="{{ asset('assets/images/all-project/completed-project/arma-monika.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> MONIKA, AFTABNAGAR</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_south_view.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-south.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ARMA</span> SOUTH VIEW, AFTABNAGAR</b></h4>
                    </a>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <a href="arma_esha_moazzem.php"><img src="{{ asset('assets/images/all-project/completed-project/Esha_Moazzem.jpg')}}"
                            class="img-responsive">
                        <h4><b><span class="name">ESHA</span> MOAZZEM NIBASH, AFTABNAGAR</b></h4>
                    </a>
                </div>
                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_angon.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-angon.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Angon</b></h4>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_binti_kutir.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-binti-kutir.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Binti Kutir</b></h4>-->
                <!--    </a>-->
                <!--</div>-->

                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_khawaja.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-khawaja.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Khawaja</b></h4>-->
                <!--    </a>-->
                <!--</div>-->

                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_lake_view.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-lake-view.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Lake View</b></h4>-->
                <!--    </a>-->
                <!--</div>-->

                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_madhobee.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-madhobee.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Madhobee</b></h4>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_nasrin_villa.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-nasrin-villa.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Nasrin Villa</b></h4>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_prottasa.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-prottasa.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Prottasa</b></h4>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_salma_villa.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-salma-vila.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Salma Villa</b></h4>-->
                <!--    </a>-->
                <!--</div>-->

                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_shaily.php"><img-->
                <!--            src="images/all-project/completed-project/arma-shaily-gulshan-link-road.jpg"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Shaily</b></h4>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_suchana.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-suchana.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Suchana</b></h4>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_shamima.php"><img src="{{ asset('assets/images/all-project/completed-project/shamima.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Shamima</b></h4>-->
                <!--    </a>-->
                <!--</div>-->

                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_mm_tower.php"><img src="{{ asset('assets/images/all-project/completed-project/arma-mm-tower.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> MM Tower</b></h4>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_moazzem_mili_nibash.php"><img-->
                <!--            src="images/all-project/completed-project/esha-moazzem-mili-Nibash.jpg') }}" class="img-responsive">-->
                <!--        <h4><b><span class="name">ESHA</span> Moazzem Mili Nibash</b></h4>-->
                <!--    </a>-->
                <!--</div>-->

                <!--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">-->
                <!--    <a href="arma_kunje_kiron.php"><img src="{{ asset('assets/images/all-project/completed-project/kunje-kiron.jpg')}}"-->
                <!--            class="img-responsive">-->
                <!--        <h4><b><span class="name">ARMA</span> Kunje Kiron</b></h4>-->
                <!--    </a>-->
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
