@extends('layouts.app')

@section('pageTitle', 'Widgets')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Widgets</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">

                    <div class="card">
                        <img src="{{ url('assets/media/image/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center m-t-70-minus">
                            <figure class="avatar avatar-xl m-b-20">
                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="...">
                            </figure>
                            <h5>Roxana Roussell</h5>
                            <p class="text-muted">Web Developer</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repudiandae eveniet
                                harum.</p>
                            <a href="#" class="btn btn-outline-primary">
                                <i class="mr-2" data-feather="edit-2"></i> Edit Profile
                            </a>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-4 text-info">
                                    <h4 class="font-weight-bold">291</h4>
                                    <span>Post</span>
                                </div>
                                <div class="col-4 text-success">
                                    <h4 class="font-weight-bold">10.596</h4>
                                    <span>Followers</span>
                                </div>
                                <div class="col-4 text-warning">
                                    <h4 class="font-weight-bold">7.896</h4>
                                    <span>Likes</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-facebook">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="ti-facebook font-size-30 opacity-7"></i>
                                <div class="m-l-20">
                                    <h5 class="m-b-0">50k Likes</h5>
                                    <small>Social media information</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-twitter">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="ti-twitter font-size-30 opacity-7"></i>
                                <div class="m-l-20">
                                    <h5 class="mb-0 font-weight-bold">3k Followers</h5>
                                    <small>Social media information</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-linkedin">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="ti-linkedin font-size-30 opacity-7"></i>
                                <div class="m-l-20">
                                    <h5 class="mb-0 font-weight-bold">5k Connections</h5>
                                    <small>Social media information</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-whatsapp">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-whatsapp font-size-30 opacity-7"></i>
                                <div class="m-l-20">
                                    <h5 class="mb-0 font-weight-bold">20 Messages</h5>
                                    <small>Social media information</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-youtube">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-youtube font-size-30 opacity-7"></i>
                                <div class="m-l-20">
                                    <h5 class="mb-0 font-weight-bold">539 Videos</h5>
                                    <small>Social media information</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-instagram">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-instagram font-size-30 opacity-7"></i>
                                <div class="m-l-20">
                                    <h5 class="mb-0 font-weight-bold">100k Followers</h5>
                                    <small>Social media information</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-block m-r-10 bg-info-bright text-info icon-block-floating">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <h4 class="card-title mb-0">Feedback</h4>
                            </div>
                            <div class="m-b-30">
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" checked="" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Service was not
                                            upto mark.</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Service was not
                                            suitable for me.</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3">Pricing
                                            issues.</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio4">Software is
                                            buggy.</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio5">Need better
                                            customer support</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block">Share Feedback</button>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Skills</h6>
                            <div class="mb-4">
                                <div class="text-muted mb-2">
                                    <div class="icon-block icon-block-sm icon-block-floating icon-block-outline-primary text-primary m-r-10">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <span class="text-uppercase font-size-11">Graphic Design</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 42%;"
                                             aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="h6 mb-0 ml-3">42%</span>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="text-muted mb-2">
                                    <div class="icon-block icon-block-sm icon-block-floating icon-block-outline-danger text-danger m-r-10">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="text-uppercase font-size-11">Web Design</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1" style="height: 5px">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="h6 mb-0 ml-3">75%</span>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="text-muted mb-2">
                                    <div class="icon-block icon-block-sm icon-block-floating icon-block-outline-warning text-warning m-r-10">
                                        <i class="fa fa-bar-chart"></i>
                                    </div>
                                    <span class="text-uppercase font-size-11">Software</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1" style="height: 5px">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;"
                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="h6 mb-0 ml-3">50%</span>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="text-muted mb-2">
                                    <div class="icon-block icon-block-sm icon-block-floating icon-block-outline-success text-success m-r-10">
                                        <i class="fa fa-cloud-upload"></i>
                                    </div>
                                    <span class="text-uppercase font-size-11">Contact Management</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1" style="height: 7px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 22%;"
                                             aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="h6 mb-0 ml-3">22%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <figure class="avatar mr-3">
                                        <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle" alt="...">
                                    </figure>
                                </div>
                                <div>
                                    <h4 class="mb-1">Roxana Roussell</h4>
                                    <p class="text-muted mb-0">
                                        Software developer
                                    </p>
                                </div>
                                <a href="#" class="btn btn-primary btn-sm ml-auto">
                                    <i class="fa fa-plus m-r-5"></i>
                                    Follow
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Timeline</h6>
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15 bring-forward">
                                            <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle" alt="image">
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Charged undefined</h6>
                                        <p class="m-b-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores,
                                            excepturi?</p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o m-r-5"></i> Yesterday
                                        </small>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15 bring-forward">
                                    <span class="avatar-title bg-warning rounded-circle">
                                        <i class="ti-image"></i>
                                    </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Johnatan Due</h6>
                                        <p class="m-b-5">
                                            <img src="{{ url('assets/media/image/portfolio-five.jpg') }}" alt="image" class="w-25">
                                            <img src="{{ url('assets/media/image/portfolio-one.jpg') }}" alt="image" class="w-25">
                                            <img src="{{ url('assets/media/image/portfolio-three.jpg') }}" alt="image" class="w-25">
                                        </p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o m-r-5"></i> 20.10.2018
                                        </small>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15 bring-forward">
                                            <span class="avatar-title bg-danger rounded-circle">KS</span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Add a new user</h6>
                                        <p class="m-b-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores,
                                            excepturi?</p>
                                        <p class="m-b-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est iusto
                                            necessitatibus officia porro repellendus rerum.</p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o m-r-5"></i> 20.10.2018
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title mb-0">Total Followers</h4>
                            <ul class="list-inline my-4">
                                <li class="list-inline-item mb-0">
                                    <div class="icon-block bg-twitter icon-block-floating">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                </li>
                                <li class="list-inline-item mb-0">
                                    <div class="icon-block bg-facebook icon-block-floating">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </li>
                                <li class="list-inline-item mb-0">
                                    <div class="icon-block bg-instagram icon-block-floating">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </li>
                                <li class="list-inline-item mb-0">
                                    <div class="icon-block bg-dribbble icon-block-floating">
                                        <i class="fa fa-dribbble"></i>
                                    </div>
                                </li>
                            </ul>
                            <h1 class="font-weight-bold mb-0">31,053</h1>
                        </div>
                    </div>

                    <div class="card">
                        <div class="d-flex align-items-center">
                            <div class="bg-twitter text-center p-20">
                                <i class="ti-twitter font-size-40"></i>
                            </div>
                            <div class="p-l-20">
                                <h2 class="mb-1 font-weight-bold">2.5K</h2>
                                <p class="m-0 text-uppercase text-twitter">Followers</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="d-flex align-items-center">
                            <div class="bg-facebook text-center p-20">
                                <i class="ti-facebook font-size-40"></i>
                            </div>
                            <div class="p-l-20">
                                <h2 class="mb-1 font-weight-bold">5.8K</h2>
                                <p class="m-0 text-uppercase text-facebook">Followers</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Photos</h6>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-one.jpg') }}" alt="image">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-two.jpg') }}" alt="image">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-three.jpg') }}" alt="image">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-four.jpg') }}" alt="image">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-five.jpg') }}" alt="image">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-six.jpg') }}" alt="image">
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-primary">All Media</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Online Users</h6>
                                <div>
                                    <a href="#" class="js-card-refresh">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                    <div class="dropdown ml-2">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center p-l-r-0">
                                    <figure class="avatar avatar-state-success mr-3">
                                        <span class="avatar-title rounded-circle">V</span>
                                    </figure>
                                    <div>
                                        <h6 class="m-b-0">Valentine Maton</h6>
                                        <small class="text-muted">Engineer</small>
                                    </div>
                                    <a href="#" data-toggle="tooltip" title="Send Message"
                                       class="ml-auto btn btn-primary btn-sm">
                                        <i class="ti-email"></i>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex align-items-center p-l-r-0">
                                    <figure class="avatar avatar-state-success mr-3">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle" alt="image">
                                    </figure>
                                    <div>
                                        <h6 class="m-b-0">Holmes Cherryman</h6>
                                        <small class="text-muted">Human resources</small>
                                    </div>
                                    <a href="#" data-toggle="tooltip" title="Send Message"
                                       class="ml-auto btn btn-primary btn-sm">
                                        <i class="ti-email"></i>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex align-items-center p-l-r-0">
                                    <figure class="avatar avatar-state-success mr-3">
                                        <span class="avatar-title rounded-circle">AE</span>
                                    </figure>
                                    <div>
                                        <h6 class="m-b-0">Malanie Hanvey</h6>
                                        <small class="text-muted">Real estate agent</small>
                                    </div>
                                    <a href="#" data-toggle="tooltip" title="Send Message"
                                       class="ml-auto btn btn-primary btn-sm">
                                        <i class="ti-email"></i>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex align-items-center p-l-r-0">
                                    <figure class="avatar avatar-state-success mr-3">
                                        <span class="avatar-title bg-dark rounded-circle">KC</span>
                                    </figure>
                                    <div>
                                        <h6 class="m-b-0">Kenneth Hune</h6>
                                        <small class="text-muted">Engineer</small>
                                    </div>
                                    <a href="#" data-toggle="tooltip" title="Send Message"
                                       class="ml-auto btn btn-primary btn-sm">
                                        <i class="ti-email"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            New Customers
                            <small class="opacity-5">Last 30 days</small>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="font-size-35 font-weight-bold">47.033</div>
                                <div class="icon-block icon-block-xl icon-block-floating icon-block-outline-success opacity-8">
                                    <i class="ti-user"></i>
                                </div>
                            </div>
                            <p class="mb-0">
                                <i class="ti-angle-down m-r-5"></i>
                                2.00%
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            Total Reservation
                            <small class="opacity-5">Last 7 days</small>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="font-size-35 font-weight-bold">21.238</div>
                                <div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
                                    <i class="ti-layers-alt"></i>
                                </div>
                            </div>
                            <p class="mb-0">
                                <i class="ti-angle-up m-r-5"></i>
                                22.00%
                            </p>
                        </div>
                    </div>
                    <div class="card bg-primary">
                        <div class="card-header d-flex justify-content-between">
                            New Customers
                            <small class="opacity-5">Last 30 days</small>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="font-size-35 font-weight-bold">47.033</div>
                                <div class="icon-block icon-block-xl icon-block-floating icon-block-outline-white opacity-5">
                                    <i class="ti-user"></i>
                                </div>
                            </div>
                            <p class="mb-0">
                                <i class="ti-angle-down m-r-5"></i>
                                2.00%
                            </p>
                        </div>
                    </div>
                    <div class="card bg-success">
                        <div class="card-header d-flex justify-content-between">
                            Total Reservation
                            <small class="opacity-5">Last 7 days</small>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="font-size-35 font-weight-bold">21.238</div>
                                <div class="icon-block icon-block-xl icon-block-floating icon-block-outline-white opacity-5">
                                    <i class="ti-layers-alt"></i>
                                </div>
                            </div>
                            <p class="mb-0">
                                <i class="ti-angle-up m-r-5"></i>
                                22.00%
                            </p>
                        </div>
                    </div>
                    <div class="card m-b-30 bg-dark-gradient">
                        <div class="card-body text-white">
                            <div class="text-center">
                                <div class="font-size-35 font-weight-800 p-t-20">$65.154</div>
                                <p class="opacity-7 p-t-10">
                                    Average sales in past 3 months.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
