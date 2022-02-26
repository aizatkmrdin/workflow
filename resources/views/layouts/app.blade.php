<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nago - Admin & Dashboard HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/media/image/favicon.png') }}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ url('vendors/bundle.css') }}" type="text/css">

    @yield('head')

    <!-- App styles -->
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}" type="text/css">
</head>
{{-- <body @if (trim($__env->yieldContent('bodyClass'))) class="@yield('bodyClass')" @endif> --}}
<body class="small-navigation">
<!-- begin::preloader-->
{{-- <div class="preloader">
    <div class="preloader-icon"></div>
</div> --}}
<!-- end::preloader -->

<!-- END: Sidebar Group -->

<!-- begin::main -->
<div class="layout-wrapper">

    <!-- begin::header -->
    <div class="header d-print-none">

        <div class="header-left">
            <div class="navigation-toggler">
                <a href="#" data-action="navigation-toggler">
                    <i data-feather="menu"></i>
                </a>
            </div>
            <div class="header-logo">
                <a href="{{ url('/') }}">
                    <img class="logo" src="{{ url('assets/media/image/logo.png') }}" alt="logo">
                    <img class="logo-light" src="{{ url('assets/media/image/logo-light.png') }}" alt="light logo">
                </a>
            </div>
        </div>

        <div class="header-body">
            <div class="header-body-left">
                <div class="page-title">
                    <h4>@yield('pageTitle')</h4>
                </div>
            </div>
            <div class="header-body-right">
                <ul class="navbar-nav">

                    <!-- begin::header search -->
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Search" data-toggle="dropdown">
                            <span class="mr-2 d-sm-inline d-none">Roxana Roussell</span>
                            <figure class="avatar avatar-sm">
                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu p-2 dropdown-menu-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-prepend">
                                        <button class="btn" type="button">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- end::header search -->
                </ul>

                <!-- begin::mobile header toggler -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
                <!-- end::mobile header toggler -->
            </div>
        </div>

    </div>
    <!-- end::header -->

    <div class="content-wrapper">

        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-menu-tab">
                <ul>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Admin"
                           data-nav-target="#admin">
                            <i data-feather="user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Report"
                           data-nav-target="#report">
                            <i data-feather="edit-3"></i>
                        </a>
                    </li>
                   
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Employee"
                           data-nav-target="#employee">
                            <i data-feather="users"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Server"
                           data-nav-target="#server">
                            <i data-feather="server"></i>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class="navigation-menu-body">
                <div class="navigation-menu-group">
                    @can('admin-list')
                    <div id="admin">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="user"></i> Admin
                            </li>
                            <li>
                                <a @if(!request()->segment(1) || request()->segment(1) == 'task') class="active"
                                   @endif href="{{ route('task.index') }}">Task</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'employee') class="active"
                                   @endif href="{{ route('employee.index') }}">Manage Employee Account</a></li>
                         
                        </ul>
                    </div>
                    @endcan
                    @can('role-list')
                        <div id="roles">
                            <ul>
                                <li class="navigation-divider d-flex align-items-center">
                                    <i class="mr-2" data-feather="user"></i> Roles
                                </li>
                                <li>
                                    <a @if(!request()->segment(1) || request()->segment(1) == 'roles') class="active"
                                    @endif href="{{ route('roles.index') }}">List of Roles</a></li>
                            
                            </ul>
                        </div>
                    @endcan
                    <div id="report">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="edit-3"></i> Report
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'analytics-dashboard') class="active"
                                   @endif href="{{ route('analytics-dashboard') }}">List of Report</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="ti-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ti-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="employee">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="users"></i> Employee
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'profile') class="active"
                                   @endif href="{{ route('profile') }}">Rating</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'user-list') class="active"
                                   @endif href="{{ route('user-list') }}">Claim</a></li>
                                   <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="ti-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ti-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                    <div id="server">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="server"></i> Server
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="forms">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="edit-3"></i> Forms
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'basic-forms') class="active"
                                   @endif href="{{ route('basic-forms') }}">Basic Forms</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'custom-forms') class="active"
                                   @endif href="{{ route('custom-forms') }}">Custom Forms</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'advanced-forms') class="active"
                                   @endif href="{{ route('advanced-forms') }}">Advanced Forms</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'form-validation') class="active"
                                   @endif href="{{ route('form-validation') }}">Form Validation</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'form-wizard') class="active"
                                   @endif href="{{ route('form-wizard') }}">Form Wizard</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'file-upload') class="active"
                                   @endif href="{{ route('file-upload') }}">File Upload</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'datepicker') class="active"
                                   @endif href="{{ route('datepicker') }}">Datepicker</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'timepicker') class="active"
                                   @endif href="{{ route('timepicker') }}">Timepicker</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'colorpicker') class="active"
                                   @endif href="{{ route('colorpicker') }}">Colorpicker</a></li>
                        </ul>
                    </div>
                    <div id="plugins">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="gift"></i> Plugins
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'sweet-alert') class="active"
                                   @endif href="{{ route('sweet-alert') }}">Sweet Alert</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'lightbox') class="active"
                                   @endif href="{{ route('lightbox') }}">Lightbox</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'toast') class="active"
                                   @endif href="{{ route('toast') }}">Toast</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'tour') class="active"
                                   @endif href="{{ route('tour') }}">Tour</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'slick-slide') class="active"
                                   @endif href="{{ route('slick-slide') }}">Slick Slide</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'nestable') class="active"
                                   @endif href="{{ route('nestable') }}">Nestable</a></li>
                        </ul>
                    </div>
                    <div id="pages">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="copy"></i> Pages
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'timeline') class="active"
                                   @endif href="{{ route('timeline') }}">Timeline</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'pricing-table') class="active"
                                   @endif href="{{ route('pricing-table') }}">Pricing Table</a></li>

                            <li>
                                <a @if(request()->segment(1) == 'pricing-table-2') class="active"
                                   @endif href="{{ route('pricing-table-2') }}">Pricing Table 2</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'search-result') class="active"
                                   @endif href="{{ route('search-result') }}">Search Result</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'mailing') class="active"
                                   @endif href="{{ route('mailing') }}">Mailing</a></li>
                            <li>
                                <a href="#">Error Pages</a>
                                <ul>
                                    <li><a href="{{ route('404') }}" target="_blank">404</a></li>
                                    <li><a href="{{ route('503') }}" target="_blank">503</a></li>
                                    <li><a href="{{ route('mean-at-work') }}" target="_blank">Mean at
                                            Work</a></li>
                                </ul>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'blank-page') class="active"
                                   @endif href="{{ route('blank-page') }}">Blank Page</a>
                            </li>
                            <li>
                                <a href="#">Menu Level</a>
                                <ul>
                                    <li>
                                        <a href="#">Menu Level</a>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Level </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::navigation -->

        <div class="content-body">

            <div class="content">

                @yield('content')

            </div>

            <!-- begin::footer -->
            <footer class="content-footer">
                <div>© {{ date('Y') }} Nago - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- end::footer -->

        </div>

    </div>

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="{{ url('vendors/bundle.js') }}"></script>

@yield('script')

<!-- App scripts -->
<script src="{{ url('assets/js/app.min.js') }}"></script>

</body>
</html>
