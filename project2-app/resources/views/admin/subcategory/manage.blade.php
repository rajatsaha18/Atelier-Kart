@extends('admin.master')

@section('title')
    Dashboard | Add Sub Category Page
@endsection

@section('body')
    <div class="table-responsive bs-example widget-shadow">
        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        <h4>All Sub Category Info</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Sl No.</th>
                <th>Category Name</th>
                <th>Sub Category Name</th>
                <th>Sub Category Description</th>
                <th>Sub Category Image</th>
                <th>Publication Status</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($subCategories as $subCategory)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$subCategory->category_id}}</td>
                <td>{{$subCategory->name}}</td>
                <td>{{$subCategory->description}}</td>
                <td><img src="{{asset($subCategory->image)}}" alt="" height="70" width="55"></td>
                <td>{{$subCategory->status == 1 ? 'published' : 'unpublished'}}</td>
                <td>
                    <a href="{{route('subcategory.edit',['id' => $subCategory->id])}}" class="btn btn-success btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="{{route('subcategory.delete', ['id' => $subCategory->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this ? ');">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
