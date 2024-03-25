@extends('layouts.app')
@section('content')

<section class="properties-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="section-heading-v1 ">
                    <h3 style="padding-top: 20px; padding-bottom: 0px; margin: 0px;"><span>Project</span>
                        Details</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Property details area-->
<section class="property-details-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 properties-slides">
                <div class="photo-slider big-photo">

                    <div class="item"><img src="{{ asset($project->images[0]->image) }}" alt=""></div>
                </div>
                <div class="photo-slider pagin-slider">
                    @foreach ($project->images as $item)
                    <div class="item"><img src="{{ url($item->image) }}" alt=""></div>
                    {{-- <div class="item"><img src="images/all-project/completed-project/shamima.jpg" alt=""></div> --}}
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="content-details-one">
                    <div class="top-details">
                        <h3><span class="name">{{ $project->first_name }}</span> {{ $project->last_name }}</h3>
                        <h4><i class="fa fa-map-marker"></i>{{ $project->location }}</h4>
                        <p></p>
                    </div>
                    <div class="last-details">
                        <h4>Key Information:</h4>
                        <br>
                        <ul>
                            @foreach ($project->keyFeature as $item)
                            <li><i class="fa fa-chevron-circle-right">
                                </i> &nbsp; {{ $item->key_info }}</li>

                            @endforeach
                        </ul>
                        <!--<a href="01678612681" class="btn-a floatleft">Call Now</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Property details area-->
@endsection
