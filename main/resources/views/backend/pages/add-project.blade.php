@extends('layouts.main')
@section('content')
<h1>add project index</h1>
<div class="col-lg-6">
    <div class="card mb-20">
        <div class="card-header">
            Gutters
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

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
