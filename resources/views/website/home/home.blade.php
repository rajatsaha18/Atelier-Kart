@extends('website.master')

@section('title')
    Home Page
@endsection

@section('body')
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
                        @foreach($categories as $category)
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('category', ['id' => $category->id])}}">{{$category->name}} <span class="fa fa-angle-down"></span></a>

                                <ul class="dropdown-menu">
                                    @foreach($category->subCategories as $subCategory)

                                    <li><a class="dropdown-item" href="{{route('subcategory',['id' => $subCategory->id])}}">{{$subCategory->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </nav>
        </div>

        <div class="w3l_banner_nav_right">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3l_banner_nav_right_banner">
                                <h3>Stay home & get
                                    <span>your daily</span> need's</h3>
                                <div class="more">
                                    <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                       data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_nav_right_banner1">
                                <h3>Make your <span>food</span> with Spicy.</h3>
                                <div class="more">
                                    <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                       data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_nav_right_banner2">
                                <h3>Compare & Save <i>30% Money</i> </h3>
                                <div class="more">
                                    <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                       data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="clearfix"></div>


    </div>

    <div class="container-fluid mx-lg-0">
        <div class="banner_bottom">
            <div class="wthree_banner_bottom_left_grid_sub">
            </div>
            <div class="row wthree_banner_bottom_left_grid_sub1">
                <div class="col-lg-4 col-md-6 wthree_banner_bottom_left">
                    <div class="wthree_banner_bottom_left_grid">
                        <img src="{{asset('/')}}website/assets/images/4.jpg" alt=" " class="img-fluid radius-image" />
                        <div class="wthree_banner_bottom_left_grid_pos">
                            <h4>Discount Offer <span>25%</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wthree_banner_bottom_left">
                    <div class="wthree_banner_bottom_left_grid">
                        <img src="{{asset('/')}}website/assets/images/5.jpg" alt=" " class="img-fluid radius-image" />
                        <div class="wthree_banner_btm_pos">
                            <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wthree_banner_bottom_left mt-lg-0 mt-5">
                    <div class="wthree_banner_bottom_left_grid">
                        <img src="{{asset('/')}}website/assets/images/6.jpg" alt=" " class="img-fluid radius-image" />
                        <div class="wthree_banner_btm_pos1">
                            <h3>Save <span>Upto</span> $10</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Your Daily Staples</h3>
            <div class="row agile_top_brands_grids">
                @foreach($products as $product)
                <div class="col-lg-3 col-sm-6 top_brand_left mb-3">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="tag"><img src="{{asset('/')}}website/assets/images/tag.png" alt=" " class="img-fluid" /></div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{route('detail', ['id' => $product->id])}}"><img title=" " alt=" " src="{{asset($product->image)}}" height="140" width="110" class="img-fluid" /></a>
                                            <p>{{$product->name}}</p>
                                            <h4>TK. {{$product->selling_price}} <span>TK. {{$product->regular_price}}</span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="{{route('add-to-cart',['id' => $product->id])}}" method="post">
                                                @csrf
                                                <fieldset>

                                                    <input type="hidden" value="1" name="qty" />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
{{--                                                <div class="button">--}}
{{--                                                    <input type="hidden" value="1" name="qty"/>--}}
{{--                                                    <button type="submit" class="btn btn-warning px-5" ><i class="lni lni-cart"></i>Add To Cart</button>--}}
{{--                                                </div>--}}


                                            </form>

                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //top-brands -->
    <!-- fresh-vegetables -->
    <div class="fresh-vegetables">
        <div class="container">
            <h3>Top Products</h3>
            <div class="row w3l_fresh_vegetables_grids">
                <div class="col-lg-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left pl-lg-0">
                    <div class="w3l_fresh_vegetables_grid2">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">All Brands</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Vegetables</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Fruits</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">Juices</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">Pet Food</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">Bread & Bakery</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">Cleaning</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Spices</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dry Fruits</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dairy Products</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 w3l_fresh_vegetables_grid_right mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-lg-4 w3l_fresh_vegetables_grid">
                            <div class="w3l_fresh_vegetables_grid1">
                                <img src="{{asset('/')}}website/assets/images/8.jpg" alt=" " class="img-fluid radius-image" />
                            </div>
                        </div>
                        <div class="col-lg-4 w3l_fresh_vegetables_grid">
                            <div class="w3l_fresh_vegetables_grid1">
                                <div class="w3l_fresh_vegetables_grid1_rel">
                                    <img src="{{asset('/')}}website/assets/images/7.jpg" alt=" " class="img-fluid radius-image" />
                                    <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                        <div class="more m1">
                                            <a href="products.html"
                                               class="button--saqui button--round-l button--text-thick"
                                               data-text="Shop now">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w3l_fresh_vegetables_grid1_bottom">
                                <img src="{{asset('/')}}website/assets/images/10.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                                    <h5>Special Offers</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 w3l_fresh_vegetables_grid mt-lg-0 mt-5">
                            <div class="w3l_fresh_vegetables_grid1">
                                <img src="{{asset('/')}}website/assets/images/9.jpg" alt=" " class="img-fluid radius-image" />
                            </div>
                            <div class="w3l_fresh_vegetables_grid1_bottom">
                                <img src="{{asset('/')}}website/assets/images/11.jpg" alt=" " class="img-fluid radius-image" />
                            </div>
                        </div>

                    </div>
                    <div class="agileinfo_move_text">
                        <div class="agileinfo_marquee">
                            <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                        </div>
                        <div class="agileinfo_breaking_news">
                            <span> </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //fresh-vegetables -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>


@endsection

{{--@section('body2')--}}
{{--    --}}
{{--@endsection--}}
