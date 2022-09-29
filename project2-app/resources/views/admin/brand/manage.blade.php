@extends('admin.master')

@section('title')
    Dashboard | Manage Brand Page
@endsection

@section('body')
    <div class="table-responsive bs-example widget-shadow">
        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        <h4 class="text-center">All Brand Info</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Sl No.</th>
                <th>Brand Name</th>
                <th>Brand Description</th>
                <th>Brand Image</th>
                <th>Publication</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$brand->name}}</td>
                <td>{{$brand->description}}</td>
                <td><img src="{{asset($brand->image)}}" alt="" height="90" width="75"></td>
                <td>{{$brand->status == 1 ? 'published' : 'unpublished'}}</td>
                <td>
                    <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-success btn-sm"> Edit</a>
                    <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this item ? ')"> Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
