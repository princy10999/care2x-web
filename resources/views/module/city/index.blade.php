@extends('layouts.main')

@section('content')
    {{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">  --}}
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">City Details</h4>

                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('city.index') }}">City</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Data</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('city.create') }}">
        <div class="col-md-12 grid-margin stretch-card" style="justify-content: end;">
            <button type="button" class="btn btn-primary">Add City</button>
        </div>
    </a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="city_list" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>City Name</th>
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
    <div class="modal fade" id="deleteUser1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
        <div class="modal d-block pos-static">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h6>Are You Sure To Delete City ?</h6>
                    </div>
                    <div class="modal-footer">
                        <form id="delete_user" method="get">
                            @csrf
                            <button class="btn btn-success" type="submit" value='success alert' id='click'>Delete
                            </button>
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
        <div class="card-body">
          <div class="wrapper text-center">
            <h4 class="card-title">Alerts Popups</h4>
            <p class="card-description">A success message!</p>
            <button class="btn btn-outline-success" onclick="showSwal('warning-message-and-cancel')">Click here!</button>
          </div>
        </div>  
    </div> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('body').on('click', '.deleteUser', function() {
            alert(1);
            var delete_url = $(this).data('href');
            $('#delete_user').attr('action', delete_url);
        });
    </script>
    <script>
        $(document).ready(function() {
            total_business_card = $('#city_list').DataTable({
                "autoWidth": false,
                "info": true,
                "paging": true,
                "lengthChange": false,
                "pageLength": 10,
                "sDom": 'lfrtip',
                "ordering": true,
                "searching": true,
                "processing": false,
                "ajax": '{{ route('city.index') }}',
                "columns": [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'city_name',
                        name: 'city_name'
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
