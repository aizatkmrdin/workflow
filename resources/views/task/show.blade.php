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
                <li class="breadcrumb-item active" aria-current="page">Show Task Detail</li>
            </ol>
        </nav>
        <div>
            <a href="{{route('task.edit', $taskDetail->id)}}" class="btn btn-primary ">
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
                                    <label for="exampleInputEmail1">Log Number</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp" value="{{$taskDetail->log}}" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Customer Name</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->customer_name}}" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Branch Name</label>
                                    <input  class="form-control" 
                                           aria-describedby="emailHelp" value="{{$taskDetail->branch}}" disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Tech Log Name</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->tech_log_name}}" disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Type of Report</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->type_of_report}}" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Device Serial No</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->device_serial_no}}" disabled>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">OP/Leasing</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->leasing_op}}" disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Issue</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->issue}}" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Log Date</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->log_date}}" disabled>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Attend Date (1st Respond)</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->attend_date}}" disabled>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Attend Turn Time</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->attend_turn_time}}" disabled>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Log Closed Date</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->log_closed_date}}" disabled>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Resolved Turn Time</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->resolve_turn_time}}" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Closed/Pending</label>
                                        <input  class="form-control" 
                                            aria-describedby="emailHelp" value="{{$taskDetail->status_text}}" disabled>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlTextarea1">Action From IBS</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$taskDetail->action_ibs}}</textarea>
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
