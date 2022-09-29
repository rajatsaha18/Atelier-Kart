@extends('website.master')

@section('title')
    Category Page
@endsection

@section('body')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Home</a><span>|</span></li>

                <li>Rice</li>

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
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('category',['id' => $category->id])}}">{{$category->name}} <span class="fa fa-angle-down"></span></a>

                                    <ul class="dropdown-menu">
                                        @foreach($category->subCategories as $subCategory)

                                            <li><a class="dropdown-item" href="products.html">{{$subCategory->name}}</a></li>
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
            <div class="w3l_banner_nav_right_banner3">
                <h3>Best Deals For New Products<span class="blink_me"></span></h3>
            </div>
            <div class="container">

                <div class="w3ls_w3l_banner_nav_right_grid ">
                    <h3>Popular Brands</h3>
                    <div class="w3ls_w3l_banner_nav_right_grid1">
                        <h6>food</h6>
                        <div class="row pro-grids-inn">
                            @foreach($products as $product)
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
                                                        <a href="{{route('detail',['id' => $product->id])}}"><img src="{{asset($product->image)}}" alt=" " height="140" width="110" class="img-fluid" /></a>
                                                        <p>{{$product->name}}</p>
                                                        <h4>{{$product->selling_price}} <span>{{$product->regular_price}}</span></h4>
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
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div style="margin: 8px auto; display: block; text-align:center;">
@endsection
