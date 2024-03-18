@extends('layouts.app')
@section('content')

<style>
    .img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
     display: block;
     max-width: 100%;
     height: 220px;
 }
 </style>
 <!---- Include the above in your HEAD tag -------->
 <section  class="properties-area section">
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
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/01-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/02-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/03-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/04-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/05-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/06-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/07-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/08-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/09-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/10-17-02-24.jpeg')}}" class="thumbnail img-responsive"></a></div>
         <!--<div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="{{asset('assets/images/photo-gallery/3.jpg')}}" class="thumbnail img-responsive"></a></div>-->
         <!--<div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 2"><img src="{{asset('assets/images/photo-gallery/2.jpg')}}" class="thumbnail img-responsive"></a></div>-->
         <!--<div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 3"><img src="{{asset('assets/images/photo-gallery/11.jpg')}}" class="thumbnail img-responsive"></a></div>-->
         <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 4"><img src="{{asset('assets/images/photo-gallery/1.jpg')}}" class="thumbnail img-responsive"></a></div>
         <!--<div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 5"><img src="{{asset('assets/images/photo-gallery/5.jpg')}}" class="thumbnail img-responsive"></a></div>-->
         <div class="col-lg-3 col-sm-4 col-6 "><a href="#" title="Image 6"><img src="{{asset('assets/images/photo-gallery/6new.jpg')}}" class="thumbnail img-responsive" style=""></a></div>
         <!--<div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 8"><img src="{{asset('assets/images/photo-gallery/4.jpg')}}" class="thumbnail img-responsive"></a></div>-->
         <!--<div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 9"><img src="{{asset('assets/images/photo-gallery/9.jpg')}}" class="thumbnail img-responsive"></a></div>-->
         <!--<div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 11"><img src="{{asset('assets/images/photo-gallery/8.jpg')}}" class="thumbnail img-responsive"></a></div>-->
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
