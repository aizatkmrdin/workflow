@extends('layouts.app')

@section('pageTitle', 'Product Detail')

@section('head')
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ url('vendors/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('vendors/slick/slick-theme.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">E-commerce</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
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

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slider-for">
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product4.png') }}" class="img-fluid"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product5.png') }}" class="img-fluid"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product6.png') }}" class="img-fluid"
                                         alt="image">
                                </div>
                            </div>
                            <div class="slider-nav">
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product4.png') }}" class="img-fluid"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product5.png') }}" class="img-fluid"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product6.png') }}" class="img-fluid"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between mb-2">
                                <p class="small mb-0">Technology Products</p>
                                <span class="d-flex align-items-center">
                                <i class="fa fa-heart text-danger mr-1"></i> 259
                            </span>
                            </div>
                            <h2>Ultimate Ears Wonderboom</h2>
                            <p>
                                <span class="badge bg-success-bright text-success">In stock</span>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda
                                autem eaque error explicabo fugiat iusto necessitatibus, temporibus. Laudantium,
                                voluptate?</p>
                            <div class="font-size-30 mb-2">
                                $40.25
                                <small class="mr-2">
                                    <del>$80.50</del>
                                </small>
                                <small class="text-danger">50% Off</small>
                            </div>
                            <div class="d-flex">
                                <ul class="list-inline mb-3 mr-2">
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star-half-o text-warning"></i>
                                    </li>
                                </ul>
                                <span>(4.5)</span>
                            </div>
                            <p>Features:</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check mr-2 text-success"></i>It is a long established fact that a reader
                                    will be distracted.
                                </li>
                                <li><i class="fa fa-check mr-2 text-success"></i>Contrary to popular belief, Lorem Ipsum is
                                    not text.
                                </li>
                                <li><i class="fa fa-check mr-2 text-success"></i>There are many variations of passages of
                                    Lorem.
                                </li>
                            </ul>
                            <form class="mt-4 d-flex align-items-center">
                                <div>
                                    <div class="input-group">
                                        <input type="number" class="form-control" value="1">
                                        <div class="input-group-append">
                                            <span class="input-group-text">pound</span>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary ml-2">Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills mb-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">Descriptions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false">Comments (4)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                               aria-controls="contact" aria-selected="false">Questions (3)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class="font-weight-bold">Where was he raised?</p>
                            <p>Vivamus ultricies augue vitae commodo condimentum. Nullamfaucibus eros eu mauris
                                feugiat, eget consectetur tortor tempus. Sed volutpatmollis dui eget fringilla.
                                Vestibulum blandit urna ut tellus lobortis tristique.Vestibulum ante ipsum primis in
                                faucibus orci luctus et ultrices posuere cubiliaCurae; Pellentesque quis cursus
                                mauris. Nam in ornare erat. Vestibulum convallisenim ac massa dapibus consectetur.
                                Maecenas facilisis eros ac felis mattis, egetauctor sapien varius.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores dolorum
                                earum fugiat nostrum obcaecati, quis ratione rerum sapiente soluta!</p>
                            <p class="font-weight-bold">Chemicals in</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, reiciendis!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi, aperiam
                                corporis, dolorum fugiat fugit maxime nisi optio quo similique sit sunt tempora.
                                Commodi culpa debitis deleniti dolore maiores, maxime praesentium. Autem dicta
                                dolore ipsum molestiae quae, quasi soluta tempora.</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex pl-0 pr-0">
                                        <a href="#">
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                                            </figure>
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">
                                                    <h6>Valentine Maton</h6>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">(5)</li>
                                                    </ul>
                                                </a>
                                                <div class="ml-auto">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown"
                                                           class="btn btn-outline-light btn-sm"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">View</a>
                                                            <a href="#" class="dropdown-item">Send Message</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis ex incidunt ut! Possimus, voluptates?</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pr-0">
                                        <a href="#">
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}" class="rounded-circle" alt="image">
                                            </figure>
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">
                                                    <h6>Valentine Maton</h6>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star-half-o text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">(3.5)</li>
                                                    </ul>
                                                </a>
                                                <div class="ml-auto">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown"
                                                           class="btn btn-outline-light btn-sm"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">View</a>
                                                            <a href="#" class="dropdown-item">Send Message</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pr-0">
                                        <a href="#">
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle" alt="image">
                                            </figure>
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">
                                                    <h6>Valentine Maton</h6>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star-half-o text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">(4.5)</li>
                                                    </ul>
                                                </a>
                                                <div class="ml-auto">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown"
                                                           class="btn btn-outline-light btn-sm"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">View</a>
                                                            <a href="#" class="dropdown-item">Send Message</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, dignissimos.</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pr-0">
                                        <a href="#">
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}" class="rounded-circle" alt="image">
                                            </figure>
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">
                                                    <h6>Valentine Maton</h6>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">(4)</li>
                                                    </ul>
                                                </a>
                                                <div class="ml-auto">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown"
                                                           class="btn btn-outline-light btn-sm"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">View</a>
                                                            <a href="#" class="dropdown-item">Send Message</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequatur doloremque fugit laborum minus quia sit sunt tempora totam velit.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <form class="mt-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Add a comment">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="card shadow-none">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            How are the delivery processes carried out?
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi assumenda autem cum dignissimos distinctio dolor dolores eius enim error est eveniet exercitationem expedita fuga, fugit impedit ipsum iste itaque maxime non officiis optio pariatur placeat praesentium provident quasi ratione rem saepe sapiente sequi tempora, tempore vel velit voluptate voluptatum!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none">
                                    <div class="card-header" id="headingTwo">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            Is there a payment option at the door?
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi assumenda autem cum dignissimos distinctio dolor dolores eius enim error est eveniet exercitationem expedita fuga, fugit impedit ipsum iste itaque maxime non officiis optio pariatur placeat praesentium provident quasi ratione rem saepe sapiente sequi tempora, tempore vel velit voluptate voluptatum!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none">
                                    <div class="card-header" id="headingThree">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            How many can I order at the same time?
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi assumenda autem cum dignissimos distinctio dolor dolores eius enim error est eveniet exercitationem expedita fuga, fugit impedit ipsum iste itaque maxime non officiis optio pariatur placeat praesentium provident quasi ratione rem saepe sapiente sequi tempora, tempore vel velit voluptate voluptatum!</p>
                                        </div>
                                    </div>
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
    <!-- Slick js -->
    <script src="{{ url('vendors/slick/slick.min.js') }}"></script>

    <script src="{{ url('assets/js/examples/pages/product-detail.js') }}"></script>
@endsection
