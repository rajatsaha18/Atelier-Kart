@extends('admin.master')

@section('title')
    Manage Category Page
@endsection

@section('body')
    <div class="table-responsive bs-example widget-shadow">
        <h4 class="text-center">All Category Info</h4>
        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>SL No.</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Category Image</th>
                <th>Publication</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td><img src="{{asset($category->image)}}" alt="" height="90" width="75"></td>
                <td>{{$category->status == 1 ? 'published' : 'unpublished'}}</td>
                <td>
                    <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this item')">Delete</a>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

