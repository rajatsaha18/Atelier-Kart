@extends('website.master')

@section('title')
    Product Detail Page
@endsection

@section('body')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Home</a><span>|</span></li>
                <li>Single Page</li>
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
            <div class="agileinfo_single">
                <h5>{{$product->name}}</h5>
                <div class="row">
                    <div class="col-md-6 agileinfo_single_left">
                        <div class="xzoom-container">
                            <img class="xzoom" id="xzoom-default" src="{{asset($product->subImages[0]->image)}}" xoriginal="{{asset($product->subImages[0]->image)}}"/>
                            <div class="xzoom-thumbs">
                                @foreach($product->subImages as $key => $subImage)
                                <a href="{{asset($subImage->image)}}">
                                    <img class="xzoom-gallery" width="80" src="{{asset($subImage->image)}}" @if($key == 0) xpreview="{{asset($subImage->image)}}" @endif title="The description goes here"></a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 agileinfo_single_right">
                        <div class="rating1">
							<span class="starRating">
								<input id="rating5" type="radio" name="rating" value="5">
								<label for="rating5">5</label>
								<input id="rating4" type="radio" name="rating" value="4">
								<label for="rating4">4</label>
								<input id="rating3" type="radio" name="rating" value="3" checked>
								<label for="rating3">3</label>
								<input id="rating2" type="radio" name="rating" value="2">
								<label for="rating2">2</label>
								<input id="rating1" type="radio" name="rating" value="1">
								<label for="rating1">1</label>
							</span>
                        </div>
                        <div class="w3agile_description">
                            <h4>Description :</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.</p>
                        </div>
                        <div class="snipcart-item block">
                            <div class="snipcart-thumb agileinfo_single_right_snipcart">
                                <h4>TK.{{$product->selling_price}} <span>TK.{{$product->regular_price}}</span></h4>
                            </div>
                            <div class="snipcart-details agileinfo_single_right_details">
                                <form action="{{route('add-to-cart',['id' => $product])}}" method="post">
                                    @csrf
                                    <fieldset>
                                        <div class="col-lg-8 col-md-8 col-12">
                                            <div class="form-group quantity">
                                                <label for="color">Quantity</label>
                                                <input type="number" name="qty" class="form-control" value="1" min="1"/>

                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- //banner -->
    <!-- brands -->


    <!-- //brands -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>


@endsection

