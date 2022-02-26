@extends('layouts.app')

@section('pageTitle', 'Project Detail')

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Projects</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Project Detail</li>
            </ol>
        </nav>
        <div>
            <a href="#" class="btn btn-success">
                <i class="ti-pencil mr-1"></i> Edit
            </a>
            <a href="#" class="btn btn-danger ml-1">
                <i class="ti-trash mr-1"></i> Delete
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="d-flex">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}" class="rounded" alt="...">
                                        </figure>
                                    </div>
                                    <div>
                                        <h5 class="mt-0">Nago - New Control Panel Design</h5>
                                        <span class="badge bg-info-bright text-info">In Progress</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropdown ml-auto">
                                        <a href="#" class="btn btn-sm btn-outline-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Download</a>
                                            <a href="#" class="dropdown-item">Copy to</a>
                                            <a href="#" class="dropdown-item">Rename</a>
                                            <a href="#" class="dropdown-item text-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Project Description:</p>
                            <p>Cum debitis doloremque dolorum eligendi facilis ipsa nam nemo possimus recusandae vel. Animi corporis dolorum eveniet minus odio porro sed unde vero!</p>
                            <p>Accusantium adipisci, dignissimos dolorum et, hic illum impedit iure, libero pariatur porro quae quaerat! Aperiam commodi incidunt libero modi quam quas, recusandae reprehenderit. Ab, ad aliquid id nam quas quo sed! Blanditiis!</p>
                            <div class="row my-4">
                                <div class="col-md-3">
                                    <p class="mb-2">Created:</p>
                                    <div>
                                        <i class="ti-calendar mr-1"></i>
                                        25/01/2020
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <p class="mb-2">Deadline:</p>
                                    <div>
                                        <i class="ti-calendar mr-1"></i>
                                        10/02/2021
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-4">
                                <div class="avatar-group">
                                    <figure class="avatar">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar">
                                        <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                            <span class="avatar-title bg-info rounded-circle">R</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar">
                                        <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                            <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar">
                                        <a href="#" title="Mahalia Lemme" data-toggle="tooltip">
                                            <span class="avatar-title bg-secondary rounded-circle">M</span>
                                        </a>
                                    </figure>
                                </div>
                                <div class="ml-2">Team Members</div>
                            </div>
                            <hr class="my-4">
                            <p>Comments:</p>
                            <div>
                                <div class="media mb-4">
                                    <figure class="avatar mr-3">
                                        <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                             class="rounded-circle" alt="avatar3">
                                    </figure>
                                    <div class="media-body">
                                        <p class="mb-1">Ardelia Yeomans</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, neque?</p>
                                        <div class="media mt-4">
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                                     class="rounded-circle" alt="avatar3">
                                            </figure>
                                            <div class="media-body">
                                                <h5 class="mt-0">Brynne Mettricke</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas,
                                                    temporibus!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media mb-3">
                                    <figure class="avatar mr-3">
                                        <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}"
                                             class="rounded-circle" alt="avatar3">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="mt-0">Lisetta Muehler</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet corporis cum
                                            eaque libero nostrum unde!</p>
                                    </div>
                                </div>
                                <div class="media mb-3">
                                    <figure class="avatar mr-3">
                                        <img src="{{ url('assets/media/image/user/man_avatar5.jpg') }}"
                                             class="rounded-circle" alt="avatar3">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="mt-0">Gifford Rosenwald</h5>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="#">
                                    <i class="fa fa-comment-o mr-1"></i>
                                    Load more comment (3)
                                    <i class="fa fa-caret-down ml-1"></i>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Activities</h6>
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-sm mr-3 bring-forward">
                                            <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                <i class="ti-files"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#" class="link-1">Elnore McCrillis</a> attached file
                                            </span>
                                            <span class="text-muted font-weight-normal">Wed 10:17 PM</span>
                                        </h6>
                                        <a href="#">
                                            <div class="mb-3 border p-3 border-radius-1">
                                                <i class="fa fa-file-pdf-o mr-2"></i> filename12334.pdf
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-sm mr-3 bring-forward">
                                            <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                <i class="ti-check"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#" class="link-1">Brynne Mettricke</a> completed task
                                            </span>
                                            <span class="text-muted font-weight-normal">Tue 12:17 AM</span>
                                        </h6>
                                        <a href="#">
                                            <div class="mb-3 border p-3 border-radius-1">
                                                Prototype Design
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-sm mr-3 bring-forward">
                                            <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle" alt="avatar">
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#" class="link-1">Jonny Richie</a> shared files
                                            </span>
                                            <span class="text-muted font-weight-normal">Tue 08:17 PM</span>
                                        </h6>
                                        <div class="row row-xs">
                                            <div class="col-xl-2 col-lg-3 col-md-4 col-sx-6">
                                                <figure>
                                                    <img src="{{ url('assets/media/image/portfolio-five.jpg') }}"
                                                         class="w-100 border-radius-1" alt="image">
                                                </figure>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-4 col-sx-6">
                                                <figure>
                                                    <img src="{{ url('assets/media/image/portfolio-one.jpg') }}"
                                                         class="w-100 border-radius-1" alt="image">
                                                </figure>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-4 col-sx-6">
                                                <figure>
                                                    <img src="{{ url('assets/media/image/portfolio-three.jpg') }}"
                                                         class="w-100 border-radius-1" alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Tasks</h6>
                            </div>
                            <div class="card-scroll">
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck1">Talk
                                        to new customers
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck2">Older
                                        users will be deleted from
                                        the system
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck3">Assignment
                                        will be
                                        completed
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck4">Customer
                                        notes
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck5">Clear
                                        old log records and backup
                                        will be taken
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck6">Talk
                                        to new customers
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck7">Older
                                        users will be deleted from
                                        the system
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck1">Talk
                                        to new customers
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck9" checked>
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck2">Older
                                        users will be deleted from
                                        the system
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox todo-item">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                    <label class="custom-control-label d-flex justify-content-between"
                                           for="customCheck3">Assignment
                                        will be
                                        completed
                                    </label>
                                </div>
                            </div>
                            <form class="mt-3">
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           aria-label="Example text with button addon"
                                           placeholder="New task" aria-describedby="button-addon1">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="button-addon1">Add
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Team Members</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="{{ url('assets/media/image/user/man_avatar5.jpg') }}" class="rounded-circle" alt="image">
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Valentine Maton</h6>
                                        <span class="badge badge-dark mr-2 d-sm-inline d-none">UI/UX</span>
                                    </div>
                                    <div class="ml-auto">

                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">View</a>
                                                <a href="#" class="dropdown-item">Send Message</a>
                                                <a href="#" class="dropdown-item">Assign</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}" class="rounded-circle" alt="image">
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Holmes Cherryman</h6>
                                        <span class="badge badge-dark mr-2 d-sm-inline d-none">Frontend</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">View</a>
                                                <a href="#" class="dropdown-item">Send Message</a>
                                                <a href="#" class="dropdown-item">Assign</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <span class="avatar-title bg-secondary rounded-circle">MH</span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Malanie Hanvey</h6>
                                        <span class="badge badge-dark mr-2 d-sm-inline d-none">Backend</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">View</a>
                                                <a href="#" class="dropdown-item">Send Message</a>
                                                <a href="#" class="dropdown-item">Assign</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="image">
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Kenneth Hune</h6>
                                        <span class="badge badge-dark mr-2 d-sm-inline d-none">Frontend</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">View</a>
                                                <a href="#" class="dropdown-item">Send Message</a>
                                                <a href="#" class="dropdown-item">Assign</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Attachment</h6>
                            <div class="card-scroll">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <span class="avatar-title bg-info-bright text-info rounded">
                                                    <i class="fa fa-file-text-o"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <h6 class="mb-0">Mockup.zip</h6>
                                            </a>
                                            <small class="text-muted">7 MB</small>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="text-secondary" data-toggle="tooltip" title="Download">
                                                <i class="ti-download"></i>
                                            </a>
                                            <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <span class="avatar-title bg-success-bright text-success rounded">
                                                    <i class="fa fa-file-excel-o"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <h6 class="mb-0">todoList.xlsx</h6>
                                            </a>
                                            <small class="text-muted">2 MB</small>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="text-secondary" data-toggle="tooltip" title="Download">
                                                <i class="ti-download"></i>
                                            </a>
                                            <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/portfolio-two.jpg') }}" class="rounded" alt="image">
                                            </figure>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <h6 class="mb-0">project_preview_1.jpg</h6>
                                            </a>
                                            <small class="text-muted">657 KB</small>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="text-secondary" data-toggle="tooltip" title="Download">
                                                <i class="ti-download"></i>
                                            </a>
                                            <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <span class="avatar-title bg-danger-bright text-danger rounded">
                                                    <i class="fa fa-file-pdf-o"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <h6 class="mb-0">432442213.xlsx</h6>
                                            </a>
                                            <small class="text-muted">2 MB</small>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="text-secondary" data-toggle="tooltip" title="Download">
                                                <i class="ti-download"></i>
                                            </a>
                                            <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/portfolio-four.jpg') }}" class="rounded" alt="image">
                                            </figure>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <h6 class="mb-0">project_preview_2.jpg</h6>
                                            </a>
                                            <small class="text-muted">427 KB</small>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="text-secondary" data-toggle="tooltip" title="Download">
                                                <i class="ti-download"></i>
                                            </a>
                                            <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-3 text-center">
                                <a href="#" class="btn btn-primary">Upload File</a>
                            </div>
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

    <!-- Datepicker -->
    <script src="{{ url('/vendors/datepicker/daterangepicker.js') }}"></script>

    <!-- Peity -->
    <script src="{{ url('/vendors/charts/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ url('/assets/js/examples/charts/peity.js') }}"></script>

    <!-- Dashboard scripts -->
    <script src="{{ url('/assets/js/examples/dashboard.js') }}"></script>
    <div class="colors"> <!-- To use theme colors with Javascript -->
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

@endsection
