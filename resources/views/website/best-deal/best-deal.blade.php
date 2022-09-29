@extends('website.master')

@section('title')
    Product Detail Page
@endsection

@section('body')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Home</a><span>|</span></li>
                <li>Branded Foods</li>
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
            <div class="w3l_banner_nav_right_banner3">
                <h3>Best Deals For New Products<span class="blink_me"></span></h3>
            </div>
            <div class="container">
                <div class="w3l_banner_nav_right_banner3_btm">
                    <div class="row pro-grids-inn">
                        <div class="col-lg-4 col-sm-6 w3l_banner_nav_right_banner3_btml">
                            <div class="view view-tenth">
                                <img src="{{asset('/')}}website/assets/images/13.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="mask">
                                    <h4>Grocery Store</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt.</p>
                                </div>
                            </div>
                            <h4>Utensils</h4>
                            <ol>
                                <li>sunt in culpa qui officia</li>
                                <li>commodo consequat</li>
                                <li>sed do eiusmod tempor incididunt</li>
                            </ol>
                        </div>
                        <div class="col-lg-4 col-sm-6 w3l_banner_nav_right_banner3_btml">
                            <div class="view view-tenth">
                                <img src="{{asset('/')}}website/assets/images/14.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="mask">
                                    <h4>Grocery Store</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt.</p>
                                </div>
                            </div>
                            <h4>Hair Care</h4>
                            <ol>
                                <li>enim ipsam voluptatem officia</li>
                                <li>tempora incidunt ut labore et</li>
                                <li>vel eum iure reprehenderit</li>
                            </ol>
                        </div>
                        <div class="col-lg-4 col-sm-6 w3l_banner_nav_right_banner3_btml">
                            <div class="view view-tenth">
                                <img src="{{asset('/')}}website/assets/images/15.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="mask">
                                    <h4>Grocery Store</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt.</p>
                                </div>
                            </div>
                            <h4>Cookies</h4>
                            <ol>
                                <li>dolorem eum fugiat voluptas</li>
                                <li>ut aliquid ex ea commodi</li>
                                <li>magnam aliquam quaerat</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="w3ls_w3l_banner_nav_right_grid">
                    <h3>Popular Brands</h3>
                    <div class="w3ls_w3l_banner_nav_right_grid1">
                        <h6>food</h6>
                        <div class="row pro-grids-inn">
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/5.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>knorr instant soup (100 gm)</p>
                                                        <h4>$3.00 <span>$5.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="knorr instant soup" />
                                                                <input type="hidden" name="amount" value="3.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/6.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>chings noodles (75 gm)</p>
                                                        <h4>$5.00 <span>$8.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="chings noodles" />
                                                                <input type="hidden" name="amount" value="5.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/7.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>lahsun sev (150 gm)</p>
                                                        <h4>$3.00 <span>$5.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="lahsun sev" />
                                                                <input type="hidden" name="amount" value="3.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/8.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>premium bake rusk (300 gm)</p>
                                                        <h4>$5.00 <span>$7.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="premium bake rusk" />
                                                                <input type="hidden" name="amount" value="5.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3ls_w3l_banner_nav_right_grid1">
                        <h6>vegetables & fruits</h6>
                        <div class="row pro-grids-inn">
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/9.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>fresh spinach (palak)</p>
                                                        <h4>$2.00 <span>$3.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="fresh spinach" />
                                                                <input type="hidden" name="amount" value="2.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/10.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>fresh mango dasheri (1 kg)</p>
                                                        <h4>$5.00 <span>$8.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="fresh mango dasheri" />
                                                                <input type="hidden" name="amount" value="5.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="tag"><img src="{{asset('/')}}website/assets/images/tag.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/11.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>fresh apple red (1 kg)</p>
                                                        <h4>$6.00 <span>$8.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="fresh apple red" />
                                                                <input type="hidden" name="amount" value="6.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/12.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>fresh broccoli (500 gm)</p>
                                                        <h4>$4.00 <span>$6.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="fresh broccoli" />
                                                                <input type="hidden" name="amount" value="4.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3ls_w3l_banner_nav_right_grid1">
                        <h6>beverages</h6>
                        <div class="row pro-grids-inn">
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/13.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>mixed fruit juice (1 ltr)</p>
                                                        <h4>$3.00 <span>$4.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="mixed fruit juice" />
                                                                <input type="hidden" name="amount" value="3.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/14.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>prune juice - sunsweet (1 ltr)</p>
                                                        <h4>$4.00 <span>$5.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="prune juice" />
                                                                <input type="hidden" name="amount" value="4.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="tag"><img src="{{asset('/')}}website/assets/images/tag.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/15.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>coco cola zero can (330 ml)</p>
                                                        <h4>$3.00 <span>$5.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="coco cola can" />
                                                                <input type="hidden" name="amount" value="3.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="{{asset('/')}}website/assets/images/offer.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="{{asset('/')}}website/assets/images/16.png" alt=" "
                                                                                   class="img-fluid" /></a>
                                                        <p>sprite bottle (2 ltr)</p>
                                                        <h4>$3.00 <span>$4.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                       value="sprite bottle" />
                                                                <input type="hidden" name="amount" value="3.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                       value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                       class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
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
    <!-- //banner -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>


@endsection


