@extends('layouts.main')

@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="card mb-20">
            <div class="card-header">
                Edit Images
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

            <form action="{{ route('gallery_table_update', ['id' => $gallary->id]) }}" method="POST"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="row g-3">



                        <div class="col-12">
                            <label for="formGroupExampleInput" class="form-label">Title*</label>
                            <input type="text" name="title" class="form-control" id="formGroupExampleInput"
                                placeholder="Enter Title" value="{{ $gallary->title }}">
                        </div>
                        <div class="col-12">
                            <label for="formGroupExampleInput2" class="form-label">Position</label>
                            <input type="number" name="position" class="form-control" id="formGroupExampleInput2"
                                placeholder="Add image position" value="{{ $gallary->position }}">
                        </div>
                        <div class="col-sm-6">
                            <label for="formFileLg" class="form-label">Image*</label>
                            <input class="form-control form-control-lg" name="image" id="formFileLg" type="file"
                                value="{{ $gallary->image }}"></input>
                            <br>
                            <img src="{{ asset('assets/uploads/gallery/' . $gallary->image) }}" width="90px"
                                height="70px" alt="image">

                        </div>
                    </div>

                    <br>
                    <div class="col-12">

                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>

        </div>
    @endsection

    @push('script')
        <script src="{{ asset('assets/backend/assets/vendor/js/jquery.uploader.min.js') }}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/js/ckeditor.js') }}"></script>
        <script src="{{ asset('assets/backend/assets/js/dropzone-init.js') }}"></script>
    @endpush
