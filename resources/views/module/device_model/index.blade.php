@extends('layouts.main')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Device Models Details</h4>

                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('deviceModel.index') }}">Device Models</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Data</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('deviceModel.create') }}">
        <div class="col-md-12 grid-margin stretch-card" style="justify-content: end;">
            <button type="button" class="btn btn-primary">Add Model</button>
        </div>
    </a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Model Name</th>
                                    <th>Brand Name</th>
                                    <th>Created Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>xyz</td>
                                    <td>Dell</td>
                                    <td>12/08/2023</td>

                                    <td>
                                        <button class="btn btn-outline-primary">Update</button>
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
