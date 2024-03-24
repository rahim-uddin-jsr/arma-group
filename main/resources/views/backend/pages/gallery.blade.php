@extends('layouts.main')

@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="card mb-20">
            <div class="card-header">
                Add Images
            </div>
            <!--       //status notification code start       -->
            @if (session('status'))
                <div class="alert alert-warning" role="alert">
                    {{ session('status') }}
                </div>
                <script>
                    // Automatically close the alert after 5 seconds
                    setTimeout(function() {
                        $('.alert').slideUp(500);
                    }, 2000);
                </script>
                <style>
                    .alert {
                        /* Add some padding to make the text look better */
                        padding: 12px;
                        /* Add transitions to animate height changes */
                        transition: height 0.20s ease;

                        overflow: hidden;
                        /* Hide overflow to prevent abrupt closing */
                    }
                </style>
            @endif
            <!--       //status notification code end       -->

            <form action="{{ route('gallery_store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="row g-3">



                        <div class="col-12">
                            <label for="formGroupExampleInput" class="form-label">Title*</label>
                            <input type="text" name="title" class="form-control" id="formGroupExampleInput"
                                placeholder="Enter Title">
                        </div>
                        <div class="col-12">
                            <label for="formGroupExampleInput2" class="form-label">Position</label>
                            <input type="number" name="position" class="form-control" id="formGroupExampleInput2"
                                placeholder="Add image position">
                        </div>
                        <div class="col-sm-6">
                            <label for="formFileLg" class="form-label">Image*</label>
                            <input class="form-control form-control-lg" name="image" id="formFileLg" type="file">
                        </div>

                    </div>
                </div>
        </div>
        <div class="col-12">

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>

    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/backend/assets/vendor/js/jquery.uploader.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/js/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/dropzone-init.js') }}"></script>
@endpush
