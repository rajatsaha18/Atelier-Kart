@extends('website.master')

@section('title')
    Product Detail Page
@endsection

@section('body')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Home</a><span>|</span></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    <!-- banner -->
    <div class="banner">
        <div class="w3l_banner_nav_left">
            <nav class="navbar navbar-expand-lg navbar-light p-lg-0">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav_1">
                        <li class="nav-item"><a class="nav-link" href="products.html">Branded Foods</a></li>
                        <li class="nav-item"><a class="nav-link" href="household.html">Households</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Veggies & Fruits <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu w3ls_vegetables_menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="vegetables.html" class="drop-text">Vegetables</a>
                                <a class="dropdown-item" href="vegetables.html" class="drop-text">Fruits</a>

                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="kitchen.html">Kitchen</a></li>
                        <li class="nav-item"><a class="nav-link" href="short-codes.html">Short Codes</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Beverages <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu w3ls_vegetables_menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="drinks.html" class="drop-text">Soft Drinks</a>
                                <a class="dropdown-item" href="drinks.html" class="drop-text">Juices</a>

                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="pet.html">Pet Food</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Frozen Food Snacks <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu w3ls_vegetables_menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="frozen.html" class="drop-text">Frozen Snacks</a>
                                <a class="dropdown-item" href="frozen.html" class="drop-text">Frozen Nonveg</a>

                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="bread.html">Bread & Bakery</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu w3ls_vegetables_menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="blog.html" class="drop-text">Blog</a>
                                <a class="dropdown-item" href="blog-single.html" class="drop-text">Blog Single</a>
                                <a class="dropdown-item" href="error.html" class="drop-text">404</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="w3l_banner_nav_right">
            <div class="container">
                <!-- services -->
                <div class="services">

                    <h3>Services</h3>
                    <div class="row w3ls_service_grids">
                        <div class="col-md-5 w3ls_service_grid_left">
                            <h4>cum soluta nobis est</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                repellat.</p>
                        </div>
                        <div class="col-md-7 w3ls_service_grid_right">
                            <div class="row">
                                <div class="col-md-4 w3ls_service_grid_right_1">
                                    <img src="{{asset('/')}}website/assets/images/18.jpg" alt=" " class="img-fluid radius-image" />
                                </div>
                                <div class="col-md-4 w3ls_service_grid_right_1">
                                    <img src="{{asset('/')}}website/assets/images/19.jpg" alt=" " class="img-fluid radius-image" />
                                </div>
                                <div class="col-md-4 w3ls_service_grid_right_1">
                                    <img src="{{asset('/')}}website/assets/images/20.jpg" alt=" " class="img-fluid radius-image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w3ls_service_grids1 pb-5 mb-lg-5">
                    <div class="col-md-6 w3ls_service_grids1_left pr-lg-5">
                        <img src="{{asset('/')}}website/assets/images/4.jpg" alt=" " class="img-fluid radius-image" />
                    </div>
                    <div class="col-md-6 w3ls_service_grids1_right">
                        <ul>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>et voluptates repudiandae sint
                                et
                                molestiae</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>rerum necessitatibus saepe
                                eveniet
                                ut</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>placeat facere possimus, omnis
                                voluptas</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Et harum quidem rerum facilis
                                est
                                et expedita</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>similique sunt in culpa qui
                                officia
                                deserunt</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>odio dignissimos ducimus qui
                                blanditiis</li>
                        </ul>
                        <a href="single.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //services -->
    </div>
    <!-- //banner -->
    <!-- services-bottom -->
    <div class="services-bottom">
        <div class="container">
            <div class="row pt-lg-4">
                <div class="col-md-3 col-6 about_counter_left mt-md-0 mt-4">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <p class="counter">89,147</p>
                    <h3>Followers</h3>
                </div>
                <div class="col-md-3 col-6 about_counter_left mt-md-0 mt-4">
                    <i class="fa fa-archive" aria-hidden="true"></i>
                    <p class="counter">54,598</p>
                    <h3>Savings</h3>
                </div>
                <div class="col-md-3 col-6 about_counter_left mt-md-0 mt-4">
                    <i class="fa fa-life-ring" aria-hidden="true"></i>
                    <p class="counter">83,983</p>
                    <h3>Support</h3>
                </div>
                <div class="col-md-3 col-6 about_counter_left mt-md-0 mt-4">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    <p class="counter">45,894</p>
                    <h3>Popularity</h3>
                </div>
            </div>
        </div>
    </div>


@endsection



