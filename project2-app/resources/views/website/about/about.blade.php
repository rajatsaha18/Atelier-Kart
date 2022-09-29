@extends('website.master')

@section('title')
    About Page
@endsection

@section('body')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Home</a><span>|</span></li>
                <li>About Us</li>
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
            <!-- about -->
            <div class="privacy about">
                <h3>About Us</h3>
                <p class="animi">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                    rerum facilis est et expedita distinctio.</p>
                <div class="row agile_about_grids">
                    <div class="col-md-6 agile_about_grid_right">
                        <img src="{{asset('/')}}website/assets/images/31.jpg" alt=" " class="img-fluid radius-image" />
                    </div>
                    <div class="col-md-6 agile_about_grid_left">
                        <ol>
                            <li>laborum et dolorum fuga</li>
                            <li>corrupti quos dolores et quas</li>
                            <li>est et expedita distinctio</li>
                            <li>deleniti atque corrupti quos</li>
                            <li>excepturi sint occaecati cupiditate</li>
                            <li>accusamus et iusto odio</li>
                        </ol>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //about -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <h3>Meet Our Amazing Team</h3>
            <div class="row agileits_team_grids">
                <div class="col-md-3 agileits_team_grid">
                    <img src="{{asset('/')}}website/assets/images/32.jpg" alt=" " class="img-fluid radius-image" />
                    <h4>Martin Paul</h4>
                    <p>Manager</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileits_team_grid">
                    <img src="{{asset('/')}}website/assets/images/33.jpg" alt=" " class="img-fluid radius-image" />
                    <h4>Michael Rick</h4>
                    <p>Supervisor</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileits_team_grid">
                    <img src="{{asset('/')}}website/assets/images/34.jpg" alt=" " class="img-fluid radius-image" />
                    <h4>Thomas Carl</h4>
                    <p>Supervisor</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileits_team_grid">
                    <img src="{{asset('/')}}website/assets/images/35.jpg" alt=" " class="img-fluid radius-image" />
                    <h4>Laura Lee</h4>
                    <p>CEO</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    <!-- testimonials -->
    <div class="testimonials">
        <div class="container">
            <h3>Testimonials</h3>
            <div class="w3_testimonials_grids">
                <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="row banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                        tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Andrew Smith <span>Customer</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                        tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Thomson Richard <span>Customer</span></h4>
                                </div>

                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="row banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                        tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Crisp Kale <span>Customer</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                        tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>John Paul <span>Customer</span></h4>
                                </div>

                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="row banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                        tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Rosy Carl <span>Customer</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                        tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Rockson Doe <span>Customer</span></h4>
                                </div>

                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

{{--@section('body2')--}}
{{--    --}}
{{--@endsection--}}

