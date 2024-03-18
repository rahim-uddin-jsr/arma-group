@extends('layouts.app')
@section('content')
<section  class="properties-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="section-heading-v1 text-center">
                    <h3><span>Certifi</span>cation</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
  <div class="row">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-6"><a href="#" title=""><img src="{{asset('assets/images/certificates/iso-arel.jpg') }}" class="thumbnail img-responsive"></a></div>
        <!--<div id="image-rotate" class="col-lg-6 col-sm-6 col-6"><a href="#" title=""><img src="{{asset('assets/images/certificates/rehab-certificate.jpg')}}" class="thumbnail img-responsive"></a></div>-->
        <div id="image-rotate" class="col-lg-6 col-sm-6 col-6"><a href="#" title=""><img src="{{asset('assets/images/certificates/REHAB Certificate-2020.jpg') }}" class="thumbnail img-responsive"></a></div>
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
