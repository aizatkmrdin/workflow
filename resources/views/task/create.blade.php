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
                    <a href="{{route('task.index')}}">Task</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create Task Detail</li>
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
                            <form action="{{ route('task.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Log No</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp"  type="text" id="log" name="log" placeholder="Log ID">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputEmail1">Employee to Assign</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp"  type="text" id="employee_name" name="employee_name" placeholder="Employee Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Type of Report</label>
                                        <select name="type_of_report" class="form-control">
                                            <option value="REPAIR AT IBS">REPAIR AT IBS</option>
                                            <option value="ONSITE SUPPORT">ONSITE SUPPORT</option>
                                            <option value="PHONE SUPPORT">PHONE SUPPORT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Branch Name</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp"  type="text" id="branch" name="branch" placeholder="Branch">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlTextarea1">Issue</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="issue" rows="3"></textarea>
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
