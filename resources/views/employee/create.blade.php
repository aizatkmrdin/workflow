@extends('layouts.app')


@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Workflow</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('employee.index')}}">Employee</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Task Detail</h6>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('employee.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Employee Name</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp"  type="text" id="name" name="name" placeholder="Employee Name">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputEmail1">Employee Nickname</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp"  type="text" id="nick_name" name="nick_name" placeholder="Employee Nickname">
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp"  type="text" id="phone" name="phone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Position</label>
                                        <select name="position" class="form-control">
                                            <option value="STAFF">STAFF</option>
                                            <option value="ADMIN">ADMIN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp"  type="text" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                  
                </div>
            </div>




        </div>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
