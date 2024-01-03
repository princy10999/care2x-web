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
                                    <h4 class="card-title">City Add</h4>
                                    <form
                                        action="@if (isset($id)) {{ route('city.update') }} @else {{ route('city.store') }} @endif"
                                        method="POST">
                                        @csrf

                                        @if (isset($id))
                                            <input type="hidden" value="{{ $id->id }}" name="city_id">
                                        @endif

                                        <div class="form-row">
                                            <div class="col">
                                                <input type="text" name="city" class="form-control"
                                                    placeholder="Enter Brand Name"
                                                    value="@if (isset($id)) {{ $id->name }} @else @endif">
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
