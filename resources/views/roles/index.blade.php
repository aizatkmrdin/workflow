@extends('layouts.app')

@section('head')
    <!-- Slick -->
    <link rel="stylesheet" href="{{ url('/vendors/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('/vendors/slick/slick-theme.css') }}" type="text/css">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ url('vendors/datepicker/daterangepicker.css') }}" type="text/css">

    <!-- DataTable -->
     <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Workflow</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Role</li>
            </ol>
        </nav>
        <div >
            <a href="{{route('task.create')}}" class="btn btn-primary text-white">
                Create Task
            </a>
        </div>
    </div>

    {{$roles}}
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Task</h6>
                    <div class="table-responsive">
                        <table id="task" class="table table-lg">
                            <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="orders-select-all">
                                        <label class="custom-control-label" for="orders-select-all"></label>
                                    </div>
                                </th>
                                <th>Log ID</th>
                                <th>Branch</th>
                                <th>Employee Name</th>
                                <th>Type Of Report</th>
                                <th>Status</th>
                                <th>Log Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($task as $item)
                                    <tr>
                                        <td></td>
                                        <td>{{$item->log}}</td>
                                        <td>{{$item->branch}}</td>
                                        <td>{{$item->employee_name}}</td>
                                        <td>{{$item->type_of_report}}</td>
                                       
                                        <td>@if ($item->status == 0)
                                            <span
                                        class="badge bg-info-bright text-info">Pending</span>
                                        @else
                                        <span
                                        class="badge bg-warning-bright text-warning">Closed</span>
                                        @endif</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <a href="{{route('task.show', $item->id)}}" class="text-primary" data-toggle="tooltip" title="Show">
                                                <i class="ti-new-window"></i>
                                            </a>
                                            <a href="{{route('task.edit', $item->id)}}" class="text-secondary" data-toggle="tooltip" title="Edit">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection

@section('script')

    <!-- Apex chart -->
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="{{ url('/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Daterangepicker -->
    <script src="{{ url('vendors/datepicker/daterangepicker.js') }}"></script>

    <!-- DataTable -->
    <script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>

    <!-- Dashboard scripts -->
    <script src="{{ url('/assets/js/examples/dashboard.js') }}"></script>

    {{-- untick tick --}}
    <script src="{{ url('assets/js/pages/task.js') }}"></script>
    <!-- Vamp -->
    <script src="{{ url('vendors/vmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('vendors/vmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ url('assets/js/examples/vmap.js') }}"></script>

    <!-- To use theme colors with Javascript -->
    <div class="colors">
        <div class="bg-primary"></div>
        <div class="bg-primary-bright"></div>
        <div class="bg-secondary"></div>
        <div class="bg-secondary-bright"></div>
        <div class="bg-info"></div>
        <div class="bg-info-bright"></div>
        <div class="bg-success"></div>
        <div class="bg-success-bright"></div>
        <div class="bg-danger"></div>
        <div class="bg-danger-bright"></div>
        <div class="bg-warning"></div>
        <div class="bg-warning-bright"></div>
    </div>

    <script src="{{ url('assets/js/examples/pages/ecommerce-dashboard.js') }}"></script>

    @if(Session::has('success'))
  <script>
        $(function() {
            toastr.options = {
                timeOut: 3000,
                progressBar: true,
                positionClass: "toast-top-center",
                showMethod: "slideDown",
                hideMethod: "slideUp",
                showDuration: 200,
                hideDuration: 200
            };
            toastr.success("{{ session('success') }}");
        });
  </script>
@endif

@endsection
