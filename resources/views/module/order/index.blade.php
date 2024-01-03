@extends('layouts.main')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order Details</h4>

                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('order.index') }}">Order</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Data</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('order.create') }}">
        <div class="col-md-12 grid-margin stretch-card" style="justify-content: end;">
            <button type="button" class="btn btn-primary">Add Order</button>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Address</th>

                                    <th>Issue</th>
                                    <th>Model</th>
                                    <th>Brand</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>chelsi</td>
                                    <td>chelsi@gmail.com</td>
                                    <td>7656787656</td>
                                    <td>New York</td>
                                    <td>xyz</td>
                                    <td>abc</td>
                                    <td>abc</td>

                                    <td>
                                        <label class="badge badge-info">On hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Update</button>
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>chelsi</td>
                                    <td>chelsi@gmail.com</td>
                                    <td>7656787656</td>
                                    <td>New York</td>
                                    <td>xyz</td>
                                    <td>abc</td>
                                    <td>abc</td>

                                    <td>
                                        <label class="badge badge-info">On hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Update</button>
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>chelsi</td>
                                    <td>chelsi@gmail.com</td>
                                    <td>7656787656</td>
                                    <td>New York</td>
                                    <td>xyz</td>
                                    <td>abc</td>
                                    <td>abc</td>

                                    <td>
                                        <label class="badge badge-info">On hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Update</button>
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>chelsi</td>
                                    <td>chelsi@gmail.com</td>
                                    <td>7656787656</td>
                                    <td>New York</td>
                                    <td>xyz</td>
                                    <td>abc</td>
                                    <td>abc</td>

                                    <td>
                                        <label class="badge badge-info">On hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Update</button>
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>chelsi</td>
                                    <td>chelsi@gmail.com</td>
                                    <td>7656787656</td>
                                    <td>New York</td>
                                    <td>xyz</td>
                                    <td>abc</td>
                                    <td>abc</td>

                                    <td>
                                        <label class="badge badge-info">On hold</label>
                                    </td>
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
