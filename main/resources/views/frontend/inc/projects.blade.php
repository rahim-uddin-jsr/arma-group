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
                    <h3><span>
                            @if ($name == 'ongoing')
                                On Going
                            @elseif($name == 'upcoming')
                                Up Comming
                            @else
                                Completed
                            @endif
                        </span> Projects</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            @foreach($projects as $project)
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <div class="product_feature">
                    <a href="{{ route('project details',[$project->id]) }}"><img
                            src="{{ asset($project->images[0]->image) }}"
                            class="img-responsive">
                        <div class="overlay">
                            <div class="text">
                                <h4 style="font-weight: bold;">Special Feature</h4>
                                <br>
                                <ul style="text-align: left;">
                                    @php
                                        $index=1
                                    @endphp
                                    @foreach($project->feature as $key => $data)
                                    <li>{{ $index }}. {{ $data->special_feature }}</li>
                                    @php
                                        $index++;
                                    @endphp
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <h4>
                            <b>
                                <!--<span class="name">ARMA</span> Arshi Nagar</b></h4>-->
                                <span class="name">{{ $project->first_name }}</span> {{ $project->last_name }}</b>
                        </h4>
                    </a>
                </div>
            </div>
            @endforeach
            {{-- <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <a href="arma_asma_garden.php"><img
                        src="{{ asset('assets/images/all-project/ongoing-project/Arma_Asma-Gerden_Banasree.png') }}"
                        class="img-responsive">
                    <h4><b><span class="name">ARMA</span> ASMA GARDEN, BANASREE</b></h4>
                </a>
            </div> --}}

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
