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
                <li class="breadcrumb-item active" aria-current="page">Edit Task Detail</li>
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
                            <form action="{{ route('task.update', $taskDetail->id) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Log Number</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp" value="{{$taskDetail->log}}" type="text" id="log" name="log">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputEmail1">Employee Name</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->employee_name}}" type="text" id="employee_name" name="employee_name">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Log Date</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->created_at}}" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Branch Name</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp" value="{{$taskDetail->branch}}" type="text" id="branch" name="branch">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Type of Report</label>
                                        <select name="type_of_report" class="form-control">
                                            <option @if($taskDetail->type_of_report == "CANCELLED") selected @endif value="CANCELLED">CANCELLED</option>
                                            <option @if($taskDetail->type_of_report  == "REPAIR AT IBS") selected @endif value="REPAIR AT IBS">REPAIR AT IBS</option>
                                            <option @if($taskDetail->type_of_report  == "ONSITE SUPPORT") selected @endif value="ONSITE SUPPORT">ONSITE SUPPORT</option>
                                            <option @if($taskDetail->type_of_report  == "PHONE SUPPORT") selected @endif value="PHONE SUPPORT">PHONE SUPPORT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlTextarea1">Issue</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="issue" rows="3">{{$taskDetail->issue}}</textarea>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" {{$taskDetail->status == 1 ? "checked" : ""}}>
                                        <label class="custom-control-label" for="customSwitch1">{{$taskDetail->status == 1 ? "Complete" : "Pending"}}</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Edit</button>
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
