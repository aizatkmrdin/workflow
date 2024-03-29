@extends('layouts.app')

@section('pageTitle', 'Orders')

@section('head')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">E-commerce</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </nav>
        <div class="dropdown">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="ti-settings mr-1"></i> Actions
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Edit</a>
                <a href="#" class="dropdown-item">Change Status</a>
                <a href="#" class="dropdown-item">Delete</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Orders</h6>
                    <div class="table-responsive">
                        <table id="orders" class="table table-lg">
                            <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="orders-select-all">
                                        <label class="custom-control-label" for="orders-select-all"></label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Customer</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <a href="#">3145</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product1.png') }}"
                                             class="rounded mr-3" alt="grape">
                                        <span>HP Pavilion 15-EC0005NT AMD</span>
                                    </a>
                                </td>
                                <td>Dollie Bullock</td>
                                <td>$230</td>
                                <td>
                                    <span
                                        class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
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
                                    <a href="#">7321</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product2.png') }}"
                                             class="rounded mr-3" alt="banana">
                                        <span>Samsung Galaxy A51 128 GB</span>
                                    </a>
                                </td>
                                <td>Holmes Hines</td>
                                <td>$300</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Payment accepted</span>
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
                                    <a href="#">9342</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product3.png') }}"
                                             class="rounded mr-3" alt="cherry">
                                        <span>Snopy SN-BT96 Pretty</span>
                                    </a>
                                </td>
                                <td>Serena Glover</td>
                                <td>$250</td>
                                <td>
                                    <span class="badge bg-danger-bright text-danger">Payment error</span>
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
                                    <a href="#">6416</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product4.png') }}"
                                             class="rounded mr-3" alt="papaya">
                                        <span>Ultimate Ears Wonderboom</span>
                                    </a>
                                </td>
                                <td>Dianne Prince</td>
                                <td>$550</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Payment accepted</span>
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
                                    <a href="#">92327</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product5.png') }}"
                                             class="rounded mr-3" alt="pig">
                                        <span>Canon Pixma E3140 Printer</span>
                                    </a>
                                </td>
                                <td>Morgan Pitts</td>
                                <td>$280</td>
                                <td>
                                    <span class="badge bg-warning-bright text-warning">Preparing the order</span>
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
                                    <a href="#">3013</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product6.png') }}"
                                             class="rounded mr-3" alt="pineapple">
                                        <span>Canon 4000D 18-55 MM</span>
                                    </a>
                                </td>
                                <td>Merrill Richardson</td>
                                <td>$128</td>
                                <td>
                                    <span class="badge bg-info-bright text-info">Awaiting PayPal payment</span>
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
                                    <a href="#">10323</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product7.png') }}"
                                             class="rounded mr-3" alt="pomegranate">
                                        <span>Lenovo Tab E10 TB-X104F 32GB 10.1"</span>
                                    </a>
                                </td>
                                <td>Krista Mathis</td>
                                <td>$500</td>
                                <td>
                                    <span class="badge bg-secondary-bright text-secondary">Shipped</span>
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
                                    <a href="#">4218</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product8.png') }}"
                                             class="rounded mr-3" alt="raspberry">
                                        <span>Samsung 55Q60RAT 55"</span>
                                    </a>
                                </td>
                                <td>Frankie Hewitt</td>
                                <td>$300</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Remote payment accepted</span>
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
                                    <a href="#">3158</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product9.png') }}"
                                             class="rounded mr-3" alt="strawberry">
                                        <span>Toshiba Canvio Basic 1TB 2.5"</span>
                                    </a>
                                </td>
                                <td>Hayden Fitzgerald</td>
                                <td>$200</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Delivered</span>
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
                                    <a href="#">9610</a>
                                </td>
                                <td>
                                    <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                        <img width="40" src="{{ url('assets/media/image/products/product10.png') }}"
                                             class="rounded mr-3" alt="watermelon">
                                        <span>Fms Wireless Controller</span>
                                    </a>
                                </td>
                                <td>Cole Holcomb</td>
                                <td>$700</td>
                                <td>
                                    <span
                                        class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
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

    <script src="{{ url('assets/js/examples/pages/orders.js') }}"></script>
@endsection
