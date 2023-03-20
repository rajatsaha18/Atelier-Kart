@extends('admin.master')

@section('title')
Monthly-report
@endsection

@section('body')
<div class="row">

    <div class="col-md-12">
        <div class="card card-body">
            <h4 class="text center text-success">{{ Session::get('message') }}</h4>
            <form action="{{ route('admin-new-order.report') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Start Date</label>
                            <input type="date" class="form-control" name="start_date"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">End Date</label>
                            <input type="date" class="form-control" name="end_date"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success mt-4" value="Find"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
