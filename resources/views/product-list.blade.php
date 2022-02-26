@extends('layouts.app')

@section('pageTitle', 'Product List')

@section('head')
    <!-- Range slider -->
    <link rel="stylesheet" href="{{ url('vendors/range-slider/css/ion.rangeSlider.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">E-commerce</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Product List</li>
            </ol>
        </nav>
        <div>
            <a href="{{ route('product-list') }}" class="btn btn-outline-primary active" title="List" data-toggle="tooltip">
                <i class="fa fa-th-list"></i>
            </a>
            <a href="{{ route('product-grid') }}" class="btn btn-outline-primary ml-2" title="Grid" data-toggle="tooltip">
                <i class="fa fa-th-large"></i>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Filter Products</h6>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Keywords">
                                </div>
                                <p class="text-muted">Brands</p>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">Iphone</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Samsung</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                                        <label class="custom-control-label" for="customCheck3">Huawei</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">General Mobile</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Xiaomi</label>
                                    </div>
                                </div>
                                <hr>
                                <p class="text-muted">Price</p>
                                <div class="form-group">
                                    <input type="text" id="rangeSlider-example">
                                </div>
                                <p class="text-muted">Rate</p>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">(100)</div>
                                    </a>
                                </div>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">(78)</div>
                                    </a>
                                </div>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">(55)</div>
                                    </a>
                                </div>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">(25)</div>
                                    </a>
                                </div>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">(17)</div>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger"></i>
                                    213
                                </div>
                                <span class="badge badge-warning">%30 Off</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="HP Pavilion 15-EC0005NT AMD">
                                    <img width="200" src="{{ url('assets/media/image/products/product1.png') }}"
                                         class="img-fluid" alt="HP Pavilion 15-EC0005NT AMD">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">HP Pavilion 15-EC0005NT AMD</h4>
                                    </a>
                                    <p>
                                        <del class="text-muted mr-1">$6.200</del>
                                        <span class="text-truncate">$5.190,90</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(47)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart-o"></i>
                                    57
                                </div>
                                <span class="badge badge-danger">Out of Stock</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="HP Pavilion 15-EC0005NT AMD">
                                    <img width="200" src="{{ url('assets/media/image/products/product2.png') }}"
                                         class="img-fluid" alt="HP Pavilion 15-EC0005NT AMD">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Samsung Galaxy A51 128 GB</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$2.400,00</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(16)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2 disabled">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger"></i> 80
                                </div>
                                <span class="badge badge-success" title="New Product" data-toggle="tooltip">
                                    <i class="ti-star"></i>
                                </span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="HP Pavilion 15-EC0005NT AMD">
                                    <img width="200" src="{{ url('assets/media/image/products/product3.png') }}"
                                         class="img-fluid" alt="HP Pavilion 15-EC0005NT AMD">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Snopy SN-BT96 Pretty</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$180,90</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(23)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger"></i>
                                    213
                                </div>
                                <span class="badge badge-warning">%30 Off</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="HP Pavilion 15-EC0005NT AMD">
                                    <img width="200" src="{{ url('assets/media/image/products/product4.png') }}"
                                         class="img-fluid" alt="HP Pavilion 15-EC0005NT AMD">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Ultimate Ears Wonderboom</h4>
                                    </a>
                                    <p>
                                        <del class="text-muted mr-1">$6.200</del>
                                        <span class="text-truncate">$5.190,90</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(47)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-success add-to-card ml-2">View Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart-o"></i>
                                    57
                                </div>
                                <!-- <span class="badge badge-danger">Out of Stock</span> -->
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="HP Pavilion 15-EC0005NT AMD">
                                    <img width="200" src="{{ url('assets/media/image/products/product5.png') }}"
                                         class="img-fluid" alt="HP Pavilion 15-EC0005NT AMD">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Canon Pixma E3140 Printer</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$2.400,00</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(16)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger"></i>
                                    80
                                </div>
                                <span class="badge badge-success" title="New Product" data-toggle="tooltip">
                                    <i class="ti-star"></i>
                                </span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="HP Pavilion 15-EC0005NT AMD">
                                    <img width="200" src="{{ url('assets/media/image/products/product6.png') }}"
                                         class="img-fluid" alt="HP Pavilion 15-EC0005NT AMD">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Canon 4000D 18-55 MM</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$180,90</span>
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item mb-3">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(23)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger"></i>
                                    213
                                </div>
                                <span class="badge badge-warning">%30 Off</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="HP Pavilion 15-EC0005NT AMD">
                                    <img width="200" src="{{ url('assets/media/image/products/product7.png') }}"
                                         class="img-fluid" alt="HP Pavilion 15-EC0005NT AMD">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Lenovo Tab E10 TB-X104F 32GB 10.1"</h4>
                                    </a>
                                    <p>
                                        <del class="text-muted mr-1">$6.200</del>
                                        <span class="text-truncate">$5.190,90</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(47)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart-o"></i>
                                    57
                                </div>
                                <span class="badge badge-danger">Out of Stock</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="HP Pavilion 15-EC0005NT AMD">
                                    <img width="200" src="{{ url('assets/media/image/products/product8.png') }}"
                                         class="img-fluid" alt="HP Pavilion 15-EC0005NT AMD">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Samsung 55Q60RAT 55"</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$2.400,00</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(16)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2 disabled">Add to Cart</button>
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

        </div>
    </div>

@endsection

@section('script')
    <!-- Range slider -->
    <script src="{{ url('vendors/range-slider/js/ion.rangeSlider.min.js') }}"></script>

    <script src="{{ url('assets/js/examples/pages/product-list.js') }}"></script>
@endsection
