<div class="col-xxl-12 col-md-12">
    <div class="panel">
        {{-- {{ $projects }} --}}
        <div class="panel-header">
            <h5>{{ $title }}</h5>
            <div id="tableSearch"></div>
        </div>
        <div class="panel-body">
            @include('inc.status-show')
            <table class="table table-hover attendance-table digi-dataTable" id="myTable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Project Name</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Total Features</th>
                        <th>Total key info</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $serialNumber =0; @endphp
                    @foreach ($projects as $index => $project)
                        @php $serialNumber += 1; @endphp
                        <tr>
                            <td>{{ $serialNumber }}</td>
                            <td>{{ $project->first_name . ' ' . $project->last_name }}</td>
                            <td>
                                <span class="badge bg-primary rounded px-2">{{ $project->status }}</span>
                            </td>
                            <td>
                                <div class="avatar avatar-lg">
                                    <img src="{{ url($project->images[0]->image) }}" class="rounded" alt="user">
                                </div>
                            </td>
                            <td>{{ $project->feature_count }}</td>
                            <td>{{ ($project->key_feature_count) }}</td>
                            <td>
                                <div class="digi-dropdown dropdown">
                                    <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-ellipsis"></i></button>
                                    <ul class="digi-dropdown-menu dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <li class="p-0"><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> Details</a></li>
                                        <li class="p-0"><a href="{{ route('edit project view',$project->id) }}" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen"></i></span> Edit</a></li>
                                        <li class="p-0"><a href="{{ route('delete project',$project->id) }}" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash"></i></span> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="table-bottom-control"></div>
        </div>
    </div>
</div>
