@extends('layouts.main')
@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="card mb-20">
            <div class="card-header">
                <img src="{{ asset('storage/app/photos/czpHev3ldVR2KcCA0nnUJQSxbDtqBLEUUJmU29et.jpg') }}" alt="">
                {{-- {{ asset('storage/app/photos/czpHev3ldVR2KcCA0nnUJQSxbDtqBLEUUJmU29et.jpg') }} --}}
                Add projects
            </div>
@include('inc.status-show')
                <form action="{{ route('add project') }}" enctype="multipart/form-data" method="post" class="row g-3">
                    @method('post')
                    @csrf
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
                        <input type="text" class="form-control" name="first_name" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last name" aria-label="Last name">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                            <textarea class="form-control" name="address" id="inputAddress"></textarea>
                    </div>

                    <div class="col-12" id="features">
                        <label for="inputEmail4"
                            class="form-label row-cols-2 w-100 d-flex justify-content-between align-items-center">
                            <div>Features</div> <button id="add-feature" class="mr-auto btn btn-sm btn-info w-25"
                                type="button">add another</button>
                        </label>
                        <input type="text" name="feature[]" class="form-control" placeholder="Add feature 1"
                            aria-label="Add feature 1">
                    </div>
                    <script>
                        addBtn = document.getElementById('add-feature');
                        features = document.getElementById('features');
                        index = 1
                        addBtn.addEventListener('click', function() {
                            index++
                            input = document.createElement('input')
                            input.setAttribute('type', 'text')
                            input.setAttribute('placeholder', 'Add feature ' + index)
                            input.setAttribute('name', 'feature[]')
                            input.setAttribute('aria-label', 'feature_' + index)
                            input.classList.add("form-control")
                            features.appendChild(input);
                        })
                    </script>
                    <div class="col-12" id="key-info">
                        <label for="inputEmail4"
                            class="form-label row-cols-2 w-100 d-flex justify-content-between align-items-center">
                            <div>Key information</div> <button id="add-key-info" class="mr-auto btn btn-sm btn-info w-25"
                                type="button">add another</button>
                        </label>
                        <input type="text" name="key_info[]" class="form-control" placeholder="Key information 1"
                            aria-label="Key information 1">
                    </div>
                    <script>
                        addInfoBtn = document.getElementById('add-key-info');
                        keyInfo = document.getElementById('key-info');
                        index1 = 1
                        addInfoBtn.addEventListener('click', function() {
                            index1++
                            input = document.createElement('input')
                            input.setAttribute('type', 'text')
                            input.setAttribute('placeholder', 'Key information ' + index1)
                            input.setAttribute('name', 'key_info[]')
                            input.setAttribute('aria-label', 'key_info_' + index1)
                            input.classList.add("form-control")
                            keyInfo.appendChild(input);
                        })
                    </script>
                    <div class="col-12">
                        <label for="inputState" class="form-label">Project Status</label>
                        <select id="inputState" name="status" class="form-select">
                            <option disabled selected>Choose...</option>
                            <option value="upcoming">Upcomming project</option>
                            <option value="ongoing">On going project</option>
                            <option value="completed">Compleated project</option>
                        </select>
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
                                            <input class="hidden" multiple name='project_images[]' type="file" id="multipleUpload">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {{-- <script src="{{ asset('assets/backend/assets/vendor/js/jquery.uploader.min.js') }}"></script> --}}
    <script src="{{ asset('assets/backend/assets/vendor/js/ckeditor.js') }}"></script>
    {{-- <script src="{{ asset('assets/backend/assets/js/dropzone-init.js') }}"></script> --}}
@endpush
