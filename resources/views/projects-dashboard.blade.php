@extends('layouts.app')

@section('pageTitle', 'Projects')

@section('head')
    <!-- Slick -->
    <link rel="stylesheet" href="{{ url('/vendors/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('/vendors/slick/slick-theme.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Projects</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between">
                                <h6 class="card-title">Project Tasks</h6>
                                <div>
                                    <a href="#" class="btn btn-outline-light btn-sm mr-2">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown"
                                           class="btn btn-outline-light btn-sm"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="project-tasks"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title mb-0">Recent Projects</h6>
                                <div>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown"
                                           class="btn btn-outline-light btn-sm"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-js">
                            <div class="card shadow-none border-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0">
                                            <a href="" class="link-2">Frontend Development</a>
                                            <span class="badge badge-success ml-2">Active</span>
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
                                        <div class="progress-bar bg-primary" style="width: 53%;"></div>
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
                                            <a href="#" title="Maurene Jewel" data-toggle="tooltip">
                                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle"
                                                     alt="avatar">
                                            </a>
                                        </figure>
                                        <figure class="avatar avatar-sm">
                                            <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                                <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}" class="rounded-circle"
                                                     alt="avatar">
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
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none border-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0">
                                            <a href="" class="link-2">UI-Kit Development</a>
                                            <span class="badge badge-success ml-2">Active</span>
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
                                        <div class="progress-bar bg-success" style="width: 53%;"></div>
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
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none border-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0">
                                            <a href="" class="link-2">Backend Development</a>
                                            <span class="badge badge-warning ml-2">Pending</span>
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
                                        <div class="progress-bar bg-success" style="width: 53%;"></div>
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
                                            <a href="#" title="Maurene Jewel" data-toggle="tooltip">
                                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle"
                                                     alt="avatar">
                                            </a>
                                        </figure>
                                        <figure class="avatar avatar-sm">
                                            <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                                <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}" class="rounded-circle"
                                                     alt="avatar">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2">Growth</h6>
                                        <h2 class="mb-0 font-weight-bold">$2,450</h2>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="progress flex-grow-1" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                 style="width: 62%;"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ml-2">%62</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2">Project</h6>
                                        <h2 class="mb-0 font-weight-bold">2,320</h2>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="progress flex-grow-1" style="height: 5px">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                 style="width:73%;"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ml-2">%73</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2">Income</h6>
                                        <h2 class="mb-0 font-weight-bold">$9,750</h2>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="progress flex-grow-1" style="height: 5px">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 style="width: 40%;"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ml-2">%40</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2">Employers</h6>
                                        <h2 class="mb-0 font-weight-bold">3,156</h2>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="progress flex-grow-1" style="height: 5px">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                 style="width: 55%;"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ml-2">%55</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5>10th Dance Competition 2019</h5>
                            <p class="text-muted">Sunt in culpa qui officia deserunt mol excep teur sint occa ecat cupi
                                datat non</p>
                            <div class="mb-4 d-flex align-items-center justify-content-center">
                                <div class="avatar-group">
                                    <figure class="avatar">
                                        <a href="#" title="Maurene Jewel" data-toggle="tooltip">
                                            <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar">
                                        <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                            <span class="avatar-title bg-secondary rounded-circle">H</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                </div>
                                <div class="text-muted ml-2">10+ friends are coming</div>
                            </div>
                            <div class="clearfix"></div>
                            <a href="" class="btn btn-outline-primary">View All</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Recent Projects</h6>
                                <div>
                                    <a href="#" class="btn btn-outline-light btn-sm mr-2">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown"
                                           class="btn btn-outline-light btn-sm"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th class="text-center">Task</th>
                                        <th class="text-center">Members</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Progress</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">Frontend Development</a>
                                        </td>
                                        <td class="text-center">25</td>
                                        <td class="text-center">
                                            <div class="avatar-group">
                                                <figure class="avatar avatar-sm">
                                                    <a href="#" title="Maurene Jewel" data-toggle="tooltip">
                                                        <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle"
                                                             alt="avatar">
                                                    </a>
                                                </figure>
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
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-info-bright text-info">In Progress</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress flex-grow-1" style="height: 5px;">
                                                    <div class="progress-bar bg-info" style="width: 53%;"></div>
                                                </div>
                                                <small class="ml-2">%53</small>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Backend Development</a>
                                        </td>
                                        <td class="text-center">10</td>
                                        <td class="text-center">
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
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-warning-bright text-warning">Pending</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress flex-grow-1" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" style="width: 80%;"></div>
                                                </div>
                                                <small class="ml-2">%80</small>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">UI-Kit Development</a>
                                        </td>
                                        <td class="text-center">32</td>
                                        <td class="text-center">
                                            <div class="avatar-group">
                                                <figure class="avatar avatar-sm">
                                                    <img src="{{ url('/assets/media/image/user/women_avatar2.jpg') }}"
                                                         class="rounded-circle"
                                                         alt="avatar">
                                                </figure>
                                                <figure class="avatar avatar-sm">
                                                    <img src="{{ url('/assets/media/image/user/women_avatar4.jpg') }}"
                                                         class="rounded-circle"
                                                         alt="avatar">
                                                </figure>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-success-bright text-success">Active</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress flex-grow-1" style="height: 5px;">
                                                    <div class="progress-bar bg-success" style="width: 35%;"></div>
                                                </div>
                                                <small class="ml-2">%35</small>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">UI-Kit Development 2</a>
                                        </td>
                                        <td class="text-center">5</td>
                                        <td class="text-center">
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
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-danger-bright text-danger">Cancel</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress flex-grow-1" style="height: 5px;">
                                                    <div class="progress-bar bg-danger" style="width: 50%;"></div>
                                                </div>
                                                <small class="ml-2">%50</small>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Upcoming Meeting</h6>
                                <a href="#" class="small">View All</a>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="avatar mr-3">
                                    <span class="avatar-title bg-info-bright text-info rounded-circle">17</span>
                                </div>
                                <div>
                                    <h5>
                                        <a href="#">UI Discussion</a>
                                    </h5>
                                    <p class="mb-0 text-muted">Execute core that as result.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="avatar mr-3">
                                    <span class="avatar-title bg-danger-bright text-danger rounded-circle">21</span>
                                </div>
                                <div>
                                    <h5>
                                        <a href="#">Project Schdule</a>
                                    </h5>
                                    <p class="mb-0 text-muted">Special cloth alert always.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="avatar mr-3">
                                    <span
                                        class="avatar-title bg-warning-bright text-warning rounded-circle">25</span>
                                </div>
                                <div>
                                    <h5>
                                        <a href="#">Design Discussion</a>
                                    </h5>
                                    <p class="mb-0 text-muted">Let us wax poetic about.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="avatar mr-3">
                                    <span
                                        class="avatar-title bg-success-bright text-success rounded-circle">10</span>
                                </div>
                                <div>
                                    <h5>
                                        <a href="#">UI Discussion</a>
                                    </h5>
                                    <p class="mb-0 text-muted">Let us wax poetic about.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Slick -->
    <script src="{{ url('/vendors/slick/slick.min.js') }}"></script>

    <!-- Apex chart -->
    <script src="{{ url('/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Circle progress -->
    <script src="{{ url('/vendors/circle-progress/circle-progress.min.js') }}"></script>

    <!-- Dashboard scripts -->
    <script src="{{ url('/assets/js/examples/dashboard.js') }}"></script>

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

    <script src="{{ url('assets/js/examples/pages/projects-dashboard.js') }}"></script>
@endsection
