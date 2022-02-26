@extends('layouts.app')

@section('pageTitle', 'Project Grid')

@section('head')
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ url('vendors/datepicker/daterangepicker.css') }}">

    <!-- select2 -->
    <link rel="stylesheet" href="{{ url('vendors/select2/css/select2.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Projects</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Project Grid</li>
            </ol>
        </nav>
        <div>
            <a href="{{ route('project-list') }}" class="btn btn-outline-primary" title="List" data-toggle="tooltip">
                <i class="fa fa-th-list"></i>
            </a>
            <a href="{{ route('project-grid') }}" class="btn btn-outline-primary active ml-2" title="Grid" data-toggle="tooltip">
                <i class="fa fa-th-large"></i>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Project Filter</h6>
                    <form>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Team Members</label>
                                    <select class="form-control select2" multiple>
                                        <option value="Maurene Jewel">Maurene Jewel</option>
                                        <option value="Krisha McAlees">Krisha McAlees</option>
                                        <option value="Hilton Dew">Hilton Dew</option>
                                        <option value="Mellie Smittoune">Mellie Smittoune</option>
                                        <option value="Teddi Rielly">Teddi Rielly</option>
                                        <option value="Gifford Rosenwald">Gifford Rosenwald</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control">
                                        <option value="">All</option>
                                        <option value="">Ready</option>
                                        <option value="">Pending</option>
                                        <option value="">In Progress</option>
                                        <option value="">Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" class="form-control single-datepicker" value="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Verified</label>
                                    <select class="form-control">
                                        <option value="">All</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">
                                    <a href="#" class="link-2">Frontend Development</a>
                                    <span class="badge bg-success-bright text-success ml-2">Ready</span>
                                </h5>
                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">View Detail</a>
                                        <a href="#" class="dropdown-item">Share</a>
                                        <a href="#" class="dropdown-item">Download</a>
                                        <a href="#" class="dropdown-item">Copy to</a>
                                        <a href="#" class="dropdown-item">Rename</a>
                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted small mt-1 mb-3">10 opened tasks, 5 tasks completed</div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-success-bright" style="width: 53%;"></div>
                            </div>
                            <p class="small">
                                <strong>53%</strong> completed
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl.
                                Maecenas quis ultrices tellus.</p>
                            <div class="row">
                                <div class="col">
                                    <div class="text-muted mb-1 small">Created</div>
                                    <div>02/01/2019</div>
                                </div>
                                <div class="col">
                                    <div class="text-muted mb-1 small">Deadline</div>
                                    <div>03/12/2019</div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <div class="small mb-2">Team Member</div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                        <span class="avatar-title bg-info rounded-circle">R</span>
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">
                                    <a href="" class="link-2">Frontend Development</a>
                                    <span class="badge bg-warning-bright text-warning ml-2">Pending</span>
                                </h5>
                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">View Detail</a>
                                        <a href="#" class="dropdown-item">Share</a>
                                        <a href="#" class="dropdown-item">Download</a>
                                        <a href="#" class="dropdown-item">Copy to</a>
                                        <a href="#" class="dropdown-item">Rename</a>
                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted small mt-1 mb-3">10 opened tasks, 5 tasks completed</div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-warning-bright" style="width: 53%;"></div>
                            </div>
                            <p class="small">
                                <strong>53%</strong> completed
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl.
                                Maecenas quis ultrices tellus.</p>
                            <div class="row">
                                <div class="col">
                                    <div class="text-muted mb-1 small">Created</div>
                                    <div>02/01/2019</div>
                                </div>
                                <div class="col">
                                    <div class="text-muted mb-1 small">Deadline</div>
                                    <div>03/12/2019</div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <div class="small mb-2">Team Member</div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Mahalia Lemme" data-toggle="tooltip">
                                        <span class="avatar-title bg-secondary rounded-circle">M</span>
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">
                                    <a href="" class="link-2">Frontend Development</a>
                                    <span class="badge bg-info-bright text-info ml-2">In Progress</span>
                                </h5>
                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">View Detail</a>
                                        <a href="#" class="dropdown-item">Share</a>
                                        <a href="#" class="dropdown-item">Download</a>
                                        <a href="#" class="dropdown-item">Copy to</a>
                                        <a href="#" class="dropdown-item">Rename</a>
                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted small mt-1 mb-3">10 opened tasks, 5 tasks completed</div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-info-bright" style="width: 53%;"></div>
                            </div>
                            <p class="small">
                                <strong>53%</strong> completed
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl.
                                Maecenas quis ultrices tellus.</p>
                            <div class="row">
                                <div class="col">
                                    <div class="text-muted mb-1 small">Created</div>
                                    <div>02/01/2019</div>
                                </div>
                                <div class="col">
                                    <div class="text-muted mb-1 small">Deadline</div>
                                    <div>03/12/2019</div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <div class="small mb-2">Team Member</div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                        <span class="avatar-title bg-info rounded-circle">R</span>
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Mahalia Lemme" data-toggle="tooltip">
                                        <span class="avatar-title bg-secondary rounded-circle">M</span>
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">
                                    <a href="" class="link-2">Frontend Development</a>
                                    <span class="badge bg-danger-bright text-danger ml-2">Cancel</span>
                                </h5>
                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">View Detail</a>
                                        <a href="#" class="dropdown-item">Share</a>
                                        <a href="#" class="dropdown-item">Download</a>
                                        <a href="#" class="dropdown-item">Copy to</a>
                                        <a href="#" class="dropdown-item">Rename</a>
                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted small mt-1 mb-3">10 opened tasks, 5 tasks completed</div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-danger-bright" style="width: 53%;"></div>
                            </div>
                            <p class="small">
                                <strong>53%</strong> completed
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl.
                                Maecenas quis ultrices tellus.</p>
                            <div class="row">
                                <div class="col">
                                    <div class="text-muted mb-1 small">Created</div>
                                    <div>02/01/2019</div>
                                </div>
                                <div class="col">
                                    <div class="text-muted mb-1 small">Deadline</div>
                                    <div>03/12/2019</div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <div class="small mb-2">Team Member</div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                        <span class="avatar-title bg-info rounded-circle">R</span>
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Mahalia Lemme" data-toggle="tooltip">
                                        <span class="avatar-title bg-secondary rounded-circle">M</span>
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">
                                    <a href="#" class="link-2">Frontend Development</a>
                                    <span class="badge bg-success-bright text-success ml-2">Ready</span>
                                </h5>
                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">View Detail</a>
                                        <a href="#" class="dropdown-item">Share</a>
                                        <a href="#" class="dropdown-item">Download</a>
                                        <a href="#" class="dropdown-item">Copy to</a>
                                        <a href="#" class="dropdown-item">Rename</a>
                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted small mt-1 mb-3">10 opened tasks, 5 tasks completed</div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-success-bright" style="width: 53%;"></div>
                            </div>
                            <p class="small">
                                <strong>53%</strong> completed
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl.
                                Maecenas quis ultrices tellus.</p>
                            <div class="row">
                                <div class="col">
                                    <div class="text-muted mb-1 small">Created</div>
                                    <div>02/01/2019</div>
                                </div>
                                <div class="col">
                                    <div class="text-muted mb-1 small">Deadline</div>
                                    <div>03/12/2019</div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <div class="small mb-2">Team Member</div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                        <span class="avatar-title bg-info rounded-circle">R</span>
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">
                                    <a href="" class="link-2">Frontend Development</a>
                                    <span class="badge bg-warning-bright text-warning ml-2">Pending</span>
                                </h5>
                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">View Detail</a>
                                        <a href="#" class="dropdown-item">Share</a>
                                        <a href="#" class="dropdown-item">Download</a>
                                        <a href="#" class="dropdown-item">Copy to</a>
                                        <a href="#" class="dropdown-item">Rename</a>
                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted small mt-1 mb-3">10 opened tasks, 5 tasks completed</div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-warning-bright" style="width: 53%;"></div>
                            </div>
                            <p class="small">
                                <strong>53%</strong> completed
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl.
                                Maecenas quis ultrices tellus.</p>
                            <div class="row">
                                <div class="col">
                                    <div class="text-muted mb-1 small">Created</div>
                                    <div>02/01/2019</div>
                                </div>
                                <div class="col">
                                    <div class="text-muted mb-1 small">Deadline</div>
                                    <div>03/12/2019</div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <div class="small mb-2">Team Member</div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                        <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle"
                                             alt="avatar">
                                    </a>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <a href="#" title="Mahalia Lemme" data-toggle="tooltip">
                                        <span class="avatar-title bg-secondary rounded-circle">M</span>
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="..." class="mb-4">
                <ul class="pagination pagination-rounded justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="ti-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="ti-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

@endsection

@section('script')
    <!-- Datepicker -->
    <script src="{{ url('vendors/datepicker/daterangepicker.js') }}"></script>

    <!-- select2 -->
    <script src="{{ url('vendors/select2/js/select2.min.js') }}"></script>

    <script src="{{ url('assets/js/examples/pages/project-grid.js') }}"></script>
@endsection
