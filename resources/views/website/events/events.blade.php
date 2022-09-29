@extends('website.master')

@section('title')
    Product Detail Page
@endsection

@section('body')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Home</a><span>|</span></li>
                <li>Events</li>
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
            <!-- events -->
            <div class="events">
                <div class="container">
                    <h3>Events</h3>
                    <div class="row w3agile_event_grids mt-5 pt-lg-3">
                        <div class="col-md-6 w3agile_event_grid">
                            <div class="row pro-grids-inn">
                                <div class="col-md-3 w3agile_event_grid_left">
                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-9 w3agile_event_grid_right">
                                    <h4>cum soluta nobis eligendi</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 w3agile_event_grid pl-lg-5">
                            <div class="row pro-grids-inn">
                                <div class="col-md-3 w3agile_event_grid_left">
                                    <i class="fa fa-bullseye" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-9 w3agile_event_grid_right">
                                    <h4>rerum hic tenetur a sapiente</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w3agile_event_grids">
                        <div class="col-md-6 w3agile_event_grid">
                            <div class="row pro-grids-inn">
                                <div class="col-md-3 w3agile_event_grid_left">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-9 w3agile_event_grid_right">
                                    <h4>earum rerum tenetur sapiente</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 w3agile_event_grid pl-lg-5">
                            <div class="row pro-grids-inn">
                                <div class="col-md-3 w3agile_event_grid_left">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-9 w3agile_event_grid_right">
                                    <h4>quibu aut officiis debitis</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w3agile_event_grids">

                        <div class="col-md-6 w3agile_event_grid">
                            <div class="row pro-grids-inn">
                                <div class="col-md-3 w3agile_event_grid_left">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-9 w3agile_event_grid_right">
                                    <h4>necessitatibus saepe eveniet</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 w3agile_event_grid pl-lg-5">
                            <div class="row pro-grids-inn">
                                <div class="col-md-3 w3agile_event_grid_left">
                                    <i class="fa fa-trophy" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-9 w3agile_event_grid_right">
                                    <h4>repudiandae sint et molestiae</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row events-bottom">
                    <div class="col-md-6 events_bottom_left">
                        <div class="row pro-grids-inn">
                            <div class="col-md-4 events_bottom_left1">
                                <div class="events_bottom_left1_grid">
                                    <h4>20</h4>
                                    <p>July, 2021</p>
                                </div>
                            </div>
                            <div class="col-md-8 events_bottom_left2">
                                <img src="assets/images/15.jpg" alt=" " class="img-fluid" />
                                <h4>ut aut reiciendis facere possimus</h4>
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>3:00 PM</li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                                </ul>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                    impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                    assumenda est.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 events_bottom_left">
                        <div class="row pro-grids-inn">
                            <div class="col-md-4 events_bottom_left1">
                                <div class="events_bottom_left1_grid">
                                    <h4>21</h4>
                                    <p>July, 2021</p>
                                </div>
                            </div>
                            <div class="col-md-8 events_bottom_left2">
                                <img src="assets/images/19.jpg" alt=" " class="img-fluid" />
                                <h4>maxime placeat facere possimus</h4>
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>3:30 PM</li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                                </ul>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                    impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                    assumenda est.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //events -->
        </div>
    </div>
    </div>
    <!-- //banner -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>


@endsection




