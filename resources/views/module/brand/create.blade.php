@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="row grid-margin">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Brand</h4>
                                    <form
                                        action="@if (isset($id)) {{ route('brand.update') }} @else {{ route('brand.store') }} @endif"
                                        method="POST">
                                        @csrf

                                        @if (isset($id))
                                            <input type="hidden" value="{{ $id->id }}" name="brand_id">
                                        @endif

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Brand Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="brand" value="@if(isset($id)) {{ $id->name }} @else @endif">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
