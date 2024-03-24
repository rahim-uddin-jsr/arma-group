@extends('layouts.main')

@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Gallary Image</h5>
                <div class="btn-box d-flex gap-2">


                    <a class="nav-link" href="{{ route('gallery') }}"><span class="btn btn-primary">Add Gallary Image <i
                                class="fa fa-plus-square"></i></span></a>


                </div>

            </div>

            <!--       //status notification code start       -->
            @if (session('status'))
                <div class="alert alert-success" role="alert">
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

            <div class="panel-body">
                <div class="table-filter-option">
                    <div class="row justify-content-between g-3">

                        <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                            <div id="productTableLength"></div>
                        </div>
                    </div>
                </div>
                <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped"
                    id="allProductTable">
                    <thead>
                        <tr>

                            <th>Title</th>
                            <th>Image</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gallaryshow as $show)
                            <tr>

                                <td>{{ $show->title }}</td>

                                <td><img src="{{ asset('assets/uploads/gallery/' . $show->image) }}" width="50px"
                                        height="50px" alt="image" </td>
                                <td>{{ $show->position }}</td>
                                <td>
                                    <div class="btn-box">

                                        <a href="{{ route('gallery_table_edit', ['id' => $show->id]) }}"> <i
                                                class="fa-light fa-pen-to-square"></i></a>


                                        <form action="{{ route('gallery_table_delete', ['id' => $show->id]) }}"
                                            method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit"><i class="fa-light fa-trash"></i></button>
                                        </form>



                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/select2.min.js"></script>
    <script src="assets/vendor/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/select2-init.js"></script>
@endpush
