@extends('layouts.app')

@section('pageTitle', 'Customers')

@section('head')
    <!-- dataTables -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Analytics</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Customers</li>
            </ol>
        </nav>
        <div>
            <a href="#" class="btn btn-primary">
                <i class="ti-plus mr-1"></i> Add
            </a>
            <div class="dropdown ml-1">
                <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="ti-settings mr-1"></i> Actions
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Returning Customers</h6>
                                <small class="opacity-7">Last 30 days</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="font-weight-bold">132</h2>
                                <div class="avatar border-0">
                                    <span class="avatar-title rounded-circle bg-secondary">
                                        <i class="ti-back-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card bg-info-gradient">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">New Customers</h6>
                                <small class="opacity-7">Last 30 days</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="font-weight-bold">321</h2>
                                <div class="avatar border-0">
                                    <span class="avatar-title rounded-circle bg-info">
                                        <i class="ti-thumb-up"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card bg-success-gradient">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Bounce Rate</h6>
                                <small class="opacity-7">Last 30 days</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="font-weight-bold">%34</h2>
                                <div class="avatar border-0">
                                    <span class="avatar-title rounded-circle bg-success">
                                        <i class="ti-arrow-top-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title">Customers Growth</h6>
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
                    <div id="customer-growth" style="height:200px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Customers</h6>
                    <table id="myTable" class="table table-lg table-hover">
                        <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>County</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ernie</td>
                            <td>Knappitt</td>
                            <td>Portugal</td>
                            <td>eknappitt0@amazonaws.com</td>
                            <td>+351 (840) 948-6817</td>
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
                            <td>Wrennie</td>
                            <td>Hazlegrove</td>
                            <td>Japan</td>
                            <td>whazlegrove1@ted.com</td>
                            <td>+81 (885) 986-8131</td>
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
                            <td>Dani</td>
                            <td>Ponnsett</td>
                            <td>Finland</td>
                            <td>dponnsett2@timesonline.co.uk</td>
                            <td>+358 (937) 777-9935</td>
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
                            <td>Caitrin</td>
                            <td>Morgon</td>
                            <td>Colombia</td>
                            <td>cmorgon3@smh.com.au</td>
                            <td>+57 (925) 174-7746</td>
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
                            <td>Corrie</td>
                            <td>Hein</td>
                            <td>Iraq</td>
                            <td>chein4@google.pl</td>
                            <td>+964 (676) 303-4259</td>
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
                            <td>Corinna</td>
                            <td>Maas</td>
                            <td>Sweden</td>
                            <td>cmaas5@blogger.com</td>
                            <td>+46 (161) 290-2663</td>
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
                            <td>Marigold</td>
                            <td>MacClure</td>
                            <td>Tanzania</td>
                            <td>mmacclure6@craigslist.org</td>
                            <td>+255 (489) 578-0264</td>
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
                            <td>Rupert</td>
                            <td>Kingsnod</td>
                            <td>Russia</td>
                            <td>rkingsnod7@fda.gov</td>
                            <td>+7 (480) 674-3308</td>
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
                            <td>Becki</td>
                            <td>Lackmann</td>
                            <td>China</td>
                            <td>blackmann8@usnews.com</td>
                            <td>+86 (271) 827-2987</td>
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
                            <td>Marylou</td>
                            <td>Oiller</td>
                            <td>Pakistan</td>
                            <td>moiller9@pagesperso-orange.fr</td>
                            <td>+92 (667) 980-4951</td>
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
                            <td>Karyn</td>
                            <td>Afield</td>
                            <td>Czech Republic</td>
                            <td>kafielda@washingtonpost.com</td>
                            <td>+420 (397) 916-7883</td>
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
                            <td>Erik</td>
                            <td>Fusedale</td>
                            <td>United States</td>
                            <td>efusedaleb@theatlantic.com</td>
                            <td>+1 (727) 168-6445</td>
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

@endsection

@section('script')

    <!-- Apex chart -->
    <script src="{{ url('/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- dataTables -->
    <script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>

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

    <script src="{{ url('assets/js/examples/pages/customers.js') }}"></script>
@endsection
