@extends('website.master')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h1 class="text-center text-success">404</h1>
                <a href="{{ route('home') }}" class="btn btn-success mx-auto">Continue to shopping</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
