@extends('layouts.app')

@section('pageTitle', 'Analytics')

@section('head')
    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ url('vendors/datepicker/daterangepicker.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Analytics</a>
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
                            <ul class="nav nav-tabs nav-analiytics-style" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true">
                                        <span class="d-flex flex-column">
                                            <span>Users</span>
                                            <span class="font-size-25">14,2 B</span>
                                            <span class="small text-success">
                                                <i class="ti-arrow-up mr-1"></i> %22,1
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false">
                                        <span class="d-flex flex-column">
                                            <span>Conversations</span>
                                            <span class="font-size-25">2,9 B</span>
                                            <span class="small text-success">
                                                <i class="ti-arrow-up mr-1"></i> %17,5
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                       aria-controls="contact" aria-selected="false">
                                        <span class="d-flex flex-column">
                                            <span>Bounce Rate</span>
                                            <span class="font-size-25">%50,02</span>
                                            <span class="small text-danger">
                                                <i class="ti-arrow-down mr-1"></i> %1,5
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#contact2" role="tab"
                                       aria-controls="contact2" aria-selected="false">
                                        <span class="d-flex flex-column">
                                            <span>Session Duration</span>
                                            <span class="font-size-25">1 dk. 59 sn.</span>
                                            <span class="small text-danger">
                                                <i class="ti-arrow-down mr-1"></i> %13,9
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div id="analytics-tab-1"></div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div id="analytics-tab-2"></div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div id="analytics-tab-3"></div>
                                </div>
                                <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                                    <div id="analytics-tab-4"></div>
                                </div>
                            </div>
                            <p>Date filter:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="reportrange" class="form-control">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <p>Current Active Users</p>
                            <div class="font-size-50" id="online-users-text">137</div>
                        </div>
                        <div id="online-users"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Sessions By Channel</h6>
                            <div class="mb-4">
                                <canvas id="chart_demo_7"></canvas>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="mb-2">Organic Search</p>
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-danger mr-2"></i>
                                        <h2 class="mb-0 font-weight-bold">1.242</h2>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <p class="mb-2">Email</p>
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-info mr-2"></i>
                                        <h2 class="mb-0 font-weight-bold">742</h2>
                                    </div>
                                </div>
                                <div class="col-6 m-t-20">
                                    <p class="mb-2">Referrral</p>
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-warning mr-2"></i>
                                        <h2 class="mb-0 font-weight-bold">442</h2>
                                    </div>
                                </div>
                                <div class="col-6 m-t-20">
                                    <p class="mb-2">Social Media</p>
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-circle text-success mr-2"></i>
                                        <h2 class="mb-0 font-weight-bold">1.742</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Organic Search</h6>
                            <p>This Week</p>
                            <div class="d-flex align-items-end mb-3">
                                <h2 class="mb-0 line-height-30 font-size-35">2,793</h2>
                                <span class="text-success small ml-2 d-flex align-items-center">
                                    <span class="ti-arrow-up mr-2"></span>
                                    <span
                                        class="badge badge-success rounded d-inline-flex align-items-center">4.9%</span>
                                </span>
                            </div>
                            <p>Measures your user's sources that generate traffic
                                metrics
                                to your website for
                                this week.</p>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <h2 class="text-primary font-weight-bold">%80</h2>
                                    <div>Mobile</div>
                                </div>
                                <div class="col-6">
                                    <h2 class="text-success font-weight-bold">%20</h2>
                                    <div>Desktop</div>
                                </div>
                            </div>
                            <button class="btn btn-primary">Detail</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Website Audience Metrics</h6>
                            <div class="mb-5">
                                <p class="d-flex justify-content-between mb-2">
                                    <span class="">New Users</span>
                                    <small class="text-muted">65% goal reached</small>
                                </p>
                                <h2 class="font-weight-bold">13,596</h2>
                                <div class="progress" style="height: 5px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 22%;"
                                         aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <p class="d-flex justify-content-between mb-2">
                                    <span>Page Views</span>
                                    <small class="text-muted">45% goal reached</small>
                                </p>
                                <h2 class="font-weight-bold">43,596</h2>
                                <div class="progress" style="height: 5px">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;"
                                         aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <p class="d-flex justify-content-between mb-2">
                                    <span>Page Sessions</span>
                                    <small class="text-muted">20% goal reached</small>
                                </p>
                                <h2 class="font-weight-bold">16,869</h2>
                                <div class="progress" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 78%;"
                                         aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <p class="d-flex justify-content-between mb-2">
                                    <span>Bounce Rate</span>
                                    <small class="text-muted">85% goal reached</small>
                                </p>
                                <h2 class="font-weight-bold">28.50%</h2>
                                <div class="progress" style="height: 5px">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%;"
                                         aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8 col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Device Sessions</h6>
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
                            <p>This week</p>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <div class="d-flex align-items-start">
                                        <i class="fa fa-circle text-primary mr-2"></i>
                                        <div>
                                            <h2 class="font-weight-bold line-height-18">8,458</h2>
                                            <div class="text-muted">Mobile</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <div class="d-flex align-items-start">
                                        <i class="fa fa-circle text-secondary mr-2"></i>
                                        <div>
                                            <h2 class="font-weight-bold line-height-18">1,052</h2>
                                            <div class="text-muted">Tablet</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <div class="d-flex align-items-start">
                                        <i class="fa fa-circle text-success mr-2"></i>
                                        <div>
                                            <h2 class="font-weight-bold line-height-18">4,271</h2>
                                            <div class="text-muted">Desktop</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="device_session_chart"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title mb-0">Pages Visited</h6>
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
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Page Title</th>
                                    <th>Percentage (%)</th>
                                    <th class="text-right">Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="#">/index.html</a>
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%;"
                                                 aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">65.35%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">/about.html</a>
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                 style="width: 51%;"
                                                 aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">51.20%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">/product.html</a>
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 style="width: 39%;"
                                                 aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">39.10%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">/categories.html</a>
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                 style="width: 40%;"
                                                 aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">40%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">/contact.html</a>
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 style="width: 80%;"
                                                 aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">80%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">/users.html</a>
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 style="width: 80%;"
                                                 aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">80%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title mb-0">Browser Used By Users</h6>
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
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Browser</th>
                                    <th>Sessions</th>
                                    <th>Bounce Rate</th>
                                    <th class="text-right">Conversion Rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <i class="fa fa-chrome"></i>
                                    </td>
                                    <td>Google Chrome</td>
                                    <td>13,41</td>
                                    <td>40.95%</td>
                                    <td class="text-right">19.45%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-firefox"></i>
                                    </td>
                                    <td>Firefox</td>
                                    <td>13,41</td>
                                    <td>40.95%</td>
                                    <td class="text-right">19.45%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-edge"></i>
                                    </td>
                                    <td>Edge</td>
                                    <td>13,41</td>
                                    <td>40.95%</td>
                                    <td class="text-right">19.45%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-safari"></i>
                                    </td>
                                    <td>Safari</td>
                                    <td>13,41</td>
                                    <td>40.95%</td>
                                    <td class="text-right">19.45%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-opera"></i>
                                    </td>
                                    <td>Opera</td>
                                    <td>13,41</td>
                                    <td>40.95%</td>
                                    <td class="text-right">19.45%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Apex chart -->
    <script src="{{ url('/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ url('/vendors/charts/chartjs/chart.min.js') }}"></script>

    <!-- Circle progress -->
    <script src="{{ url('/vendors/circle-progress/circle-progress.min.js') }}"></script>

    <!-- Daterangepicker -->
    <script src="{{ url('/vendors/datepicker/daterangepicker.js') }}"></script>

    <!-- Peity -->
    <script src="{{ url('/vendors/charts/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ url('/assets/js/examples/charts/peity.js') }}"></script>

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

    <script src="{{ url('assets/js/examples/pages/analytics-dashboard.js') }}"></script>
@endsection
