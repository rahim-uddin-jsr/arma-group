@extends('layouts.main')

@section('content')
<div class="panel-body">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="basicInput" class="form-label">Basic input</label>
                                <input type="text" class="form-control" id="basicInput">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputWithPlaceholder" class="form-label">Input with placeholder</label>
                                <input type="text" class="form-control" id="inputWithPlaceholder" placeholder="Placeholder">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputWithValue" class="form-label">Input with value</label>
                                <input type="text" class="form-control" id="inputWithValue" value="Input value">
                            </div>
                            
                            
                            
                        </div>
</div>


@endsection