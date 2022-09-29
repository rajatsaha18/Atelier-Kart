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
            <!-- about -->
            <div class="privacy about typo">
                <h3>Chec<span>kout</span></h3>
                <div class="checkout-right">
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
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
                        @php($sum = 0)
                        @foreach($products as $product)
                        <tr class="rem1">
                            <td class="invert">1</td>
                            <td class="invert-image"><a href=""><img src="{{asset($product->attributes->image)}}" alt=" " height="40" width="25" class="img-responsive"></a></td>
                            <td class="invert">
                                <form action="{{route('update-cart-product',['id' => $product->id])}}" method="POST">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="number" name="qty" class="form-control" value="{{$product->quantity}}" min="1"/>
                                        <button class="btn btn-outline-secondary" type="submit" >Update</button>
                                    </div>
                                </form>
                            </td>
                            <td class="invert"> {{$product->name}}</td>

                            <td class="invert">TK. {{$product->price}}</td>
                            <td class="invert">TK. {{$product->quantity * $product->price }}</td>
                            <td class="invert">
                                <a href="{{route('remove-cart-product',['id' => $product->id])}}" onclick="return confirm('Are you sure remove this item ? ')"><i class="bi bi-x-circle-fill"></i></a>

                            </td>
                        </tr>
                        @php($sum = $sum + $product->quantity * $product->price)
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <div class="row checkout-left">
                    <div class="col-md-4 checkout-left-basket">
                        <div class="button mb-3 px-6">
                            <a href="{{route('home')}}" class="btn btn-primary ">Continue To Basket</a>
                        </div>

                        <ul>
                            <li>Cart SubTotal(TK)
                                <span>{{number_format($sum)}} </span>
                            </li>

                            <li>Tax Amount(TK)(15%)
                                @php($tax = round(($sum * 15)/100))
                                <span>{{number_format($tax)}}</span>
                            </li>

                            <li>Shipping(TK)
                                @php($shipping = 500)
                                <span>{{$shipping}}</span>
                            </li>
                            <li>

                            </li>

                            <li>Total Payable(TK)
                                @php($grandTotal = $sum + $tax + $shipping)
                                <span>{{number_format($grandTotal)}}</span>
                            </li>

                        </ul>
                        <?php
                        Session::put('order_total', $grandTotal);
                        Session::put('tax_total', $tax);
                        Session::put('shipping_total', $shipping);

                        ?>
                    </div>
                    <div class="col-md-8 address_form_agile pl-lg-5">
                        <h4>Add a new Details</h4>
                        <form action="{{route('new-order')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                @if(isset($customer->name))
                                    <input type="text" class="form-control" value="{{$customer->name}}" readonly
                                           id="exampleInputEmail1" aria-describedby="emailHelp">
                                @else
                                    <input type="text" name="name" placeholder="Full Name" class="form-control"
                                           id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>

                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                @if(isset($customer->email))
                                    <input type="text" class="form-control" value="{{$customer->email}}" readonly
                                           id="exampleInputEmail1" aria-describedby="emailHelp">
                                @else
                                    <input type="email" name="email" placeholder="Email Address" class="form-control"
                                           id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                @endif

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                                @if(isset($customer->mobile))
                                    <input type="text" class="form-control" value="{{$customer->mobile}}" readonly
                                           id="exampleInputEmail1" aria-describedby="emailHelp">
                                @else
                                    <input type="number" name="mobile" placeholder="Phone Number" class="form-control"
                                           id="exampleInputPassword1">
                                    <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Delivery Address</label>
                                <textarea name="delivery_address" placeholder="Delivery Address" class="form-control" id="exampleInputPassword1"></textarea>
                                <span class="text-danger">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ''}}</span>
                            </div>

                            <div class="form-check mb-3">
                                <label class="form-check-label mr-lg-4" ><input class="form-check-input" type="radio" name="payment_method" value="1" checked>Cash On Delivery</label>
                                <label class="form-check-label " ><input class="form-check-input" type="radio" name="payment_method" value="2">Online Payment</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Confirm Order</button>
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


