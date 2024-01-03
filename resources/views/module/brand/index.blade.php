@extends('layouts.main')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Device Brand Details</h4>

                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('brand.index') }}">Device Brand</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Data</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('brand.create') }}">
        <div class="col-md-12 grid-margin stretch-card" style="justify-content: end;">
            <button type="button" class="btn btn-primary">Add Brand</button>
        </div>
    </a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="brand_list" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Brand Name</th>
                                    <th>Created Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
          total_business_card = $('#brand_list').DataTable({
              "autoWidth": false,
              "info": true,
              "paging": true,
              "lengthChange": false,
              "pageLength": 10,
              "sDom": 'lfrtip',
              "ordering": true,
              "searching": true,
              "processing": false,
              "ajax": '{{ route('brand.index') }}',
              "columns": [{
                      data: 'DT_RowIndex',
                      name: 'DT_RowIndex'
                  },
                  {
                      data: 'brand_name',
                      name: 'brand_name'
                  },
                  {
                      data: 'created_at',
                      name: 'created_at'
                  },
                  {
                      data: 'action',
                      name: 'action',
                      orderable: false,
                      searchable: false
                  },
              ],

          });
      });
  </script>
@endsection
