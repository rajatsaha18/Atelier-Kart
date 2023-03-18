@extends('website.master')

@section('title')
    Sign Up Page
@endsection

@section('body')
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card text-muted">
                        <div class="card-header text-success text-center text-bold">Sign Up Form</div>
                        <div class="card-body">
                            <form action="{{route('new-customer')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mobile</label>
                                    <input type="number" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
                                    <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" name="btn" value="Sign Up"/>
                                </div>

                            </form>
                            <br>
                            <a href="{{ route('customer-login') }}" class="text-primary">Already Registered !! Login Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

