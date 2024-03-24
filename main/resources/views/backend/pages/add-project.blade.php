@extends('layouts.main')
@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="card mb-20">
            <div class="card-header">
                @if ($edit)
                    Edit
                @else
                    Add
                @endif
                Project
            </div>
            @include('inc.status-show')
            <form
                action="@if ($edit) {{ route('edit single project', [$project->id]) }} @else{{ route('add project') }} @endif"
                enctype="multipart/form-data" method="post" class="row g-3">
                @if ($edit)
                    @method('put')
                @else
                    @method('post')
                @endif
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
                    <input type="text" class="form-control"
                        @if ($edit) value="{{ $project->first_name }}" @endif name="first_name"
                        placeholder="First name" aria-label="First name">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Last name</label>
                    <input type="text" @if ($edit) value="{{ $project->last_name }}" @endif
                        class="form-control" name="last_name" placeholder="Last name" aria-label="Last name">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="inputAddress">
@if ($edit)
{{ $project->location }}
@endif
</textarea>
                </div>

                <div class="col-12" id="features">
                    {{-- {{ $project }} --}}
                    <label for="inputEmail4"
                        class="form-label row-cols-2 w-100 d-flex justify-content-between align-items-center">
                        <div>Features</div> <button id="add-feature" class="mr-auto btn btn-sm btn-info w-25"
                            type="button">add another</button>
                    </label>
                    @if ($edit)
                        @foreach ($project->feature as $value)
                            {{-- {{ $image }} --}}
                            <input type="text" value="{{ $value->special_feature }}" name="feature[]"
                                class="form-control" placeholder="Add feature 1" aria-label="Add feature 1">
                        @endforeach
                    @else
                        <input type="text" name="feature[]" class="form-control" placeholder="Add feature 1"
                            aria-label="Add feature 1">
                    @endif
                </div>
                @if ($edit)
                    <script>
                        addBtn = document.getElementById('add-feature');
                        features = document.getElementById('features');
                        addBtn.addEventListener('click', function() {
                            input = document.createElement('input')
                            input.setAttribute('type', 'text')
                            input.setAttribute('placeholder', 'Add feature')
                            input.setAttribute('name', 'feature[]')
                            input.setAttribute('aria-label', 'feature')
                            input.classList.add("form-control")
                            features.appendChild(input);
                        })
                    </script>
                @else
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
                @endif
                <div class="col-12" id="key-info">
                    <label for="inputEmail4"
                        class="form-label row-cols-2 w-100 d-flex justify-content-between align-items-center">
                        <div>Key information</div> <button id="add-key-info" class="mr-auto btn btn-sm btn-info w-25"
                            type="button">add another</button>
                    </label>
                    @if ($edit)
                        @foreach ($project->keyFeature as $value)
                            <input type="text" value="{{ $value->key_info }}" name="key_info[]" class="form-control"
                                placeholder="Key information" aria-label="Key information">
                        @endforeach
                    @else
                        <input type="text" name="key_info[]" class="form-control" placeholder="Key information 1"
                            aria-label="Key information 1">
                    @endif
                </div>
                @if ($edit)
                    <script>
                        addInfoBtn = document.getElementById('add-key-info');
                        keyInfo = document.getElementById('key-info');
                        addInfoBtn.addEventListener('click', function() {
                            input = document.createElement('input')
                            input.setAttribute('type', 'text')
                            input.setAttribute('placeholder', 'Key information ')
                            input.setAttribute('name', 'key_info[]')
                            input.setAttribute('aria-label', 'key_info')
                            input.classList.add("form-control")
                            keyInfo.appendChild(input);
                        })
                    </script>
                @else
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
                @endif
                <div class="col-12">
                    <label for="inputState" class="form-label">Project Status</label>
                    <select id="inputState" name="status" class="form-select">
                        @if ($edit)
                            <option disabled>Choose...</option>
                            <option @if ($project->status === 'upcoming') selected @endif value="upcoming">Upcomming project
                            </option>
                            <option @if ($project->status === 'ongoing') selected @endif value="ongoing">On going project
                            </option>
                            <option @if ($project->status === 'completed') selected @endif value="completed">Compleated project
                            </option>
                        @else
                            <option selected disabled>Choose...</option>
                            <option value="upcoming">Upcomming project</option>
                            <option value="ongoing">On going project</option>
                            <option value="completed">Compleated project</option>
                        @endif
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
                                    @if ($edit)
                                        <div class="row row-cols-4">
                                            @foreach ($project->images as $image)
                                                {{-- {{ $image }} --}}
                                                <div id="imageCard{{ $image->id }}" class="">
                                                    <div class="d-flex flex-column w-100">
                                                        <img style="height: 100px" src="{{ url($image->image) }}"
                                                            class="img-fluid" alt="user">
                                                        <button type="button" onclick="deleteImage({{ $image->id }})"
                                                            class="btn btn-sm btn-danger">Remove</button>
                                                        {{-- <button type="button" onclick="deleteImage({{ $image->id }})" --}}
                                                        {{-- class="btn btn-sm btn-primary">Make Primary</button> --}}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="part-txt">
                                        <div class="mt-3 add-gallery-img product-image-upload product-image-upload-2 ">
                                            <h5>Upload Project Images</h5>
                                        </div>
                                        <input class="hidden" multiple name='project_images[]' type="file"
                                            id="multipleUpload">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        @if ($edit)
                            Update
                        @else
                            Submit
                        @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection

@push('script')
    {{-- <script src="{{ asset('assets/backend/assets/vendor/js/jquery.uploader.min.js') }}"></script> --}}
    <script src="{{ asset('assets/backend/assets/vendor/js/ckeditor.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        console.log(document.location.origin)

        function deleteImage(id) {
            event.preventDefault()
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.get('/arma-group/dashboard/project/image-delete/' + id, function(data, status) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                        $(document).ready(function() {
                            $('#imageCard' + id).hide();
                        });
                    });
                }
            });

        }
    </script>
    {{-- <script src="{{ asset('assets/backend/assets/js/dropzone-init.js') }}"></script> --}}
@endpush
