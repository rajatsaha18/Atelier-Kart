@extends('website.master')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))
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
