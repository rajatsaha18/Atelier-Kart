@extends('website.master')

@section('title')
    Show Cart Page
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
            <div class="privacy about typo">
                <h3>Chec<span>kout</span></h3>
                <div class="checkout-right">
                    <h4>Your shopping cart contains: <span>3 Products</span></h4>
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product Info</th>
                            <th>Quantity</th>
                            <th>Product Name</th>

                            <th>Unit Price</th>
                            <th>Sub Total</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr class="rem1">
                            <td class="invert">1</td>
                            <td class="invert-image"><a href=""><img src="{{asset($product->attributes->image)}}" alt=" " height="40" width="25" class="img-responsive"></a></td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                     <input type="number" class="form-control" value="{{$product->quantity}}" min="1"/>
                                    </div>
                                </div>
                            </td>
                            <td class="invert"> {{$product->name}}</td>

                            <td class="invert">TK. {{$product->price}}</td>
                            <td class="invert">{{$product->quantity * $product->price }}</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close1"> </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <div class="row checkout-left">
                    <div class="col-md-4 checkout-left-basket">
                        <h4>Continue to basket</h4>
                        <ul>
                            <li>Product1 <i>-</i> <span>$15.00 </span></li>
                            <li>Product2 <i>-</i> <span>$25.00 </span></li>
                            <li>Product3 <i>-</i> <span>$29.00 </span></li>
                            <li>Total Service Charges <i>-</i> <span>$15.00</span></li>
                            <li>Total <i>-</i> <span>$84.00</span></li>
                        </ul>
                    </div>
                    <div class="col-md-8 address_form_agile pl-lg-5">
                        <h4>Add a new Details</h4>
                        <form action="https://demo.w3layouts.com/demos_new/template_demo/21-06-2021/corner-store-liberty-demo_Free/1278034630/web/payment.html" method="post" class="creditly-card-form agileinfo_form">
                            <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Full name: </label>
                                            <input class="billing-address-name form-control" type="text" name="name"
                                                   placeholder="Full name">
                                        </div>
                                        <div class="w3_agileits_card_number_grids">
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Mobile number:</label>
                                                    <input class="form-control" type="text" placeholder="Mobile number">
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Landmark: </label>
                                                    <input class="form-control" type="text" placeholder="Landmark">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Town/City: </label>
                                            <input class="form-control" type="text" placeholder="Town/City">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Address type: </label>
                                            <select class="form-control option-w3ls">
                                                <option>Office</option>
                                                <option>Home</option>
                                                <option>Commercial</option>

                                            </select>
                                        </div>
                                    </div>
                                    <button class="submit check_out">Delivery to this Address</button>
                                </div>
                            </section>
                        </form>
                        <div class="checkout-right-basket">
                            <a href="payment.html">Make a Payment <span class="fa fa-chevron-right"
                                                                        aria-hidden="true"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //about -->
        </div>
    </div>
    <!-- //banner -->
    </div>
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>


@endsection


