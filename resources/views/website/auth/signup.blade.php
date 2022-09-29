@extends('website.master')

@section('title')
    Sign Up Page
@endsection

@section('body')
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card text-muted">
                        <div class="card-header text-success text-center text-bold">Sign Up Form</div>
                        <div class="card-body">
                            <form action="{{route('new-customer')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mobile</label>
                                    <input type="number" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" name="btn" value="Sign Up"/>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

