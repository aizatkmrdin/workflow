@extends('layouts.app')

@section('pageTitle', 'Gallery')

@section('head')
    <!-- Magnific popup -->
    <link rel="stylesheet" href="{{ url('vendors/lightbox/magnific-popup.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Apps</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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

            <ul class="nav nav-pills gallery-filter mb-4">
                <li class="nav-item">
                    <a href="#" class="nav-link active" data-filter="*">All</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-filter=".webTemplates">Web</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-filter=".logos">Logos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-filter=".drawings">Drawings</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-filter=".ui">UI Elements</a>
                </li>
            </ul>

            <div class="card">
                <div class="card-body">
                    <div class="gallery-container row">
                        <div class="col-lg-4 col-md-6 drawings mb-4">
                            <a href="{{ url('assets/media/image/photo1.jpg') }}" class="image-popup-gallery-item">
                                <div class="image-hover">
                                    <img src="{{ url('assets/media/image/photo1.jpg') }}" class="rounded" alt="image">
                                    <div class="image-hover-body rounded">
                                        <div>
                                            <h4 class="mb-2">Gallery Item Title</h4>
                                            <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 webTemplates drawings ui mb-4">
                            <a href="{{ url('assets/media/image/photo2.jpg') }}" class="image-popup-gallery-item">
                                <div class="image-hover">
                                    <img src="{{ url('assets/media/image/photo2.jpg') }}" class="rounded" alt="image">
                                    <div class="image-hover-body rounded">
                                        <div>
                                            <h4 class="mb-2">Gallery Item Title</h4>
                                            <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 logos mb-4">
                            <a href="{{ url('assets/media/image/photo3.jpg') }}" class="image-popup-gallery-item">
                                <div class="image-hover">
                                    <img src="{{ url('assets/media/image/photo3.jpg') }}" class="rounded" alt="image">
                                    <div class="image-hover-body rounded">
                                        <div>
                                            <h4 class="mb-2">Gallery Item Title</h4>
                                            <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 ui mb-4">
                            <a href="{{ url('assets/media/image/photo4.jpg') }}" class="image-popup-gallery-item">
                                <div class="image-hover">
                                    <img src="{{ url('assets/media/image/photo4.jpg') }}" class="rounded" alt="image">
                                    <div class="image-hover-body rounded">
                                        <div>
                                            <h4 class="mb-2">Gallery Item Title</h4>
                                            <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 ui mb-4">
                            <a href="{{ url('assets/media/image/photo5.jpg') }}" class="image-popup-gallery-item">
                                <div class="image-hover">
                                    <img src="{{ url('assets/media/image/photo5.jpg') }}" class="rounded" alt="image">
                                    <div class="image-hover-body rounded">
                                        <div>
                                            <h4 class="mb-2">Gallery Item Title</h4>
                                            <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 drawings mb-4">
                            <a href="{{ url('assets/media/image/photo6.jpg') }}" class="image-popup-gallery-item">
                                <div class="image-hover">
                                    <img src="{{ url('assets/media/image/photo6.jpg') }}" class="rounded" alt="image">
                                    <div class="image-hover-body rounded">
                                        <div>
                                            <h4 class="mb-2">Gallery Item Title</h4>
                                            <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 logos mb-4">
                            <a href="{{ url('assets/media/image/photo7.jpg') }}" class="image-popup-gallery-item">
                                <div class="image-hover">
                                    <img src="{{ url('assets/media/image/photo7.jpg') }}" class="rounded" alt="image">
                                    <div class="image-hover-body rounded">
                                        <div>
                                            <h4 class="mb-2">Gallery Item Title</h4>
                                            <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 webTemplates logos mb-4">
                            <a href="{{ url('assets/media/image/photo8.jpg') }}" class="image-popup-gallery-item">
                                <div class="image-hover">
                                    <img src="{{ url('assets/media/image/photo8.jpg') }}" class="rounded" alt="image">
                                    <div class="image-hover-body rounded">
                                        <div>
                                            <h4 class="mb-2">Gallery Item Title</h4>
                                            <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 logos mb-4">
                            <a href="{{ url('assets/media/image/photo9.jpg') }}" class="image-popup-gallery-item">
                                <div class="image-hover">
                                    <img src="{{ url('assets/media/image/photo9.jpg') }}" class="rounded" alt="image">
                                    <div class="image-hover-body rounded">
                                        <div>
                                            <h4 class="mb-2">Gallery Item Title</h4>
                                            <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm mr-2" role="status"
                                      aria-hidden="true"></span>
                            Loading...
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Magnific popup -->
    <script src="{{ url('vendors/lightbox/jquery.magnific-popup.min.js') }}"></script>

    <!-- Isotope -->
    <script src="{{ url('vendors/jquery.isotope.min.js') }}"></script>

    <script src="{{ url('assets/js/examples/pages/gallery.js') }}"></script>
@endsection
