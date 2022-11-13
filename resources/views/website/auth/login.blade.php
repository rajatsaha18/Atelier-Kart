@extends('website.master')

@section('title')
    Login Page
@endsection

@section('body')
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card text-muted">
                        <div class="card-header text-success text-center text-bold">Login Form</div>
                        <div class="card-body">
                            <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                            <form action="{{route('customer-signin')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-success btn-block" name="btn">Login</button>
                            </form>
                            <br>
                            <a href="{{ route('customer-signup') }}" class="text-primary">New User !! Register Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
