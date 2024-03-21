@extends('layouts.main')
@section('content')
<div class="col-lg-8 mx-auto">
    <div class="card mb-20">
        <div class="card-header">
            Add projects
        </div>
        <div class="card-body">
            <form class="row g-3">

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">First name</label>
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Last name</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card component-jquery-uploader">
                        <div class="card-body">
                            <div class="row">
                                {{-- <div class="col-xxl-3 col-sm-4">
                                    <div class="add-thumbnail product-image-upload product-image-upload-2">
                                        <div class="part-txt">
                                            <h5>Single Upload</h5>
                                        </div>
                                        <input type="text" id="singleUpload">
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="add-gallery-img product-image-upload product-image-upload-2">
                                        <div class="part-txt">
                                            <h5>Upload Project Images</h5>
                                        </div>
                                        <input type="text" id="multipleUpload">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection

@push('script')

<script src="{{asset('assets/backend/assets/vendor/js/jquery.uploader.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/js/ckeditor.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/dropzone-init.js')}}"></script>
@endpush
