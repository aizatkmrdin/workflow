@extends('layouts.app')

@section('pageTitle', 'Project List')

@section('head')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Projects</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Project List</li>
            </ol>
        </nav>
        <div>
            <a href="{{ route('project-list') }}" class="btn btn-outline-primary active" title="List" data-toggle="tooltip">
                <i class="fa fa-th-list"></i>
            </a>
            <a href="{{ route('project-grid') }}" class="btn btn-outline-primary ml-2" title="Grid" data-toggle="tooltip">
                <i class="fa fa-th-large"></i>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="project-list" class="table table-lg">
                            <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="projects-select-all">
                                        <label class="custom-control-label" for="projects-select-all"></label>
                                    </div>
                                </th>
                                <th>Project</th>
                                <th class="text-center">Task</th>
                                <th class="text-center">Members</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Progress</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
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
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <a href="#">Backend Development</a>
                                </td>
                                <td class="text-center">10</td>
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
                                        <figure class="avatar avatar-sm">
                                            <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle"
                                                     alt="avatar">
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
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <a href="#">UI-Kit Development</a>
                                </td>
                                <td class="text-center">32</td>
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
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
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
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <a href="#">Backend Development</a>
                                </td>
                                <td class="text-center">10</td>
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
                                        <figure class="avatar avatar-sm">
                                            <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle"
                                                     alt="avatar">
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
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <a href="#">UI-Kit Development</a>
                                </td>
                                <td class="text-center">32</td>
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
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
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
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Datatable -->
    <script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>

    <script src="{{ url('assets/js/examples/pages/project-list.js') }}"></script>
@endsection
