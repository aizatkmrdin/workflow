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
                <li class="breadcrumb-item active" aria-current="page">Show Employee Detail</li>
            </ol>
        </nav>
        <div>
            <a href="{{route('employee.edit', $employee->id)}}" class="btn btn-primary ">
                <span class="text-white">Edit</span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Task Detail</h6>
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Employee Name</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp"  type="text" id="name" name="name" value={{$employee->name}} placeholder="Employee Name">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputEmail1">Employee Nickname</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp"  type="text" id="nick_name" name="nick_name" value={{$employee->nick_name}} placeholder="Employee Nickname">
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp"  type="text" id="phone" name="phone" value={{$employee->phone}} placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Position</label>
                                        <select name="position" class="form-control">
                                            <option @if ($employee->position == 'STAFF') selected @endif value="STAFF">STAFF</option>
                                            <option @if ($employee->position == 'STAFF') selected @endif value="ADMIN">ADMIN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp"  type="text" id="email" value={{$employee->email}} name="email" placeholder="Email">
                                    </div>
                                </div>

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
