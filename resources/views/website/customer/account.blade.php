@extends('website.master')

@section('title')
    Customer Dashboard Page
@endsection

@section('body')
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ route('customer-dashboard') }}">My Dashboard</a></li>
                            <li class="list-group-item"><a href="{{ route('customer-profile') }}">My Profile</a></li>
                            <li class="list-group-item"><a href="{{ route('customer-account') }}">My Accounts</a></li>
                            <li class="list-group-item"><a href="">Change Password</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">Recent Order</div>
                        <div class="card-body">
                            <h1>Customer Account</h1>
                            <h1>Customer Account</h1>
                            <h1>Customer Account</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection




