@extends('layouts.app')
@section('content')
    <style>
        .img-responsive,
        .thumbnail>img,
        .thumbnail a>img,
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            display: block;
            max-width: 100%;
            height: 220px;
        }
    </style>
    <!---- Include the above in your HEAD tag -------->
    <section class="properties-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="section-heading-v1 text-center">
                        <h3><span>Photo</span> Gallery</h3>
                        <br>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="container">
        <div class="row">
            <div class="row">

                @foreach ($gallery as $gal)
                    <div class="col-lg-3 col-sm-4 col-6"><a href="#" title={{ $gal->title }}><img
                                src="{{ asset('assets/uploads/gallery/' . $gal->image) }}"
                                class="thumbnail img-responsive"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Heading</h3>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
