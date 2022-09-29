@extends('admin.master')

@section('title')
    Dashboard | Manage Product Page
@endsection

@section('body')
    <div class="table-responsive bs-example widget-shadow">
        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        <h4 class="text-center">All Product Info</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Sl No.</th>
                <th>Category Name</th>
                <th>Sub Category Name</th>
                <th>Brand Name</th>
                <th>Product Name</th>
                <th>Selling Price</th>
                <th> Status</th>
                <th>Action</th>

            </tr>
            </thead>

            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->subcategory->name}}</td>
                    <td>{{$product->brand->name}}</td>
                    <td>{{$product->name }}</td>
                    <td>{{$product->selling_price}}</td>
                    <td>{{$product->status == 1 ? 'published' : 'unpublished'}}</td>
                    <td>
                        <a href="{{route('product.detail',['id' => $product->id])}}" class="btn btn-primary btn-sm" title="View Product Detail">
                            <i class="fa fa-book"></i>
                        </a>
                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm" title="Edit Product">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{route('product.delete',['id' => $product->id])}}" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm('Are you sure delete this');">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
