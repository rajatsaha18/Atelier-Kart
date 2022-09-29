@extends('admin.master')

@section('title')
    Dashboard | Edit Product Page
@endsection

@section('body')
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Add Product Form</h4>
                <h4 class="text-center text-success">{{Session::get('message')}}</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id" required onchange="getSubCategory(this.value)">
                                <option value="" disabled selected>-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Sub Category Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="sub_category_id" required id="subCategoryId">
                                <option value="" disabled selected>-- Select SubCategory --</option>
                                @foreach($subCategories as $subCategory)
                                    <option value="{{$subCategory->id}}" {{$subCategory->id == $product->subcategory_id ? 'selected' : '' }}>{{$subCategory->name}}</option>
                                @endforeach

                            </select>
                            <span class="text-danger">{{$errors->has('sub_category_id') ? $errors->first('sub_category_id') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Brand Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="brand_id" required>
                                <option value="" disabled selected>-- Select Brand --</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : '' }}>{{$brand->name}}</option>
                                @endforeach

                            </select>
                            <span class="text-danger">{{$errors->has('brand_id') ? $errors->first('brand_id') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Unit Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="unit_id" required>
                                <option value="" disabled selected>-- Select Unit --</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}" {{$unit->id == $product->unit_id ? 'selected' : '' }}>{{$unit->name}}</option>
                                @endforeach

                            </select>
                            <span class="text-danger">{{$errors->has('unit_id') ? $errors->first('unit_id') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{$product->name}}" class="form-control" id="inputEmail3"/>
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" name="code" value="{{$product->code}}" class="form-control" id="inputEmail3"/>
                            <span class="text-danger">{{$errors->has('code') ? $errors->first('code') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Product Regular Price</label>
                        <div class="col-sm-9">
                            <input type="number" name="regular_price" value="{{$product->regular_price}}" class="form-control" id="inputEmail3"/>
                            <span class="text-danger">{{$errors->has('regular_price') ? $errors->first('regular_price') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Product Selling Price</label>
                        <div class="col-sm-9">
                            <input type="number" name="selling_price" value="{{$product->selling_price}}" class="form-control" id="inputEmail3"/>
                            <span class="text-danger">{{$errors->has('selling_price') ? $errors->first('selling_price') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Product Stock Amount</label>
                        <div class="col-sm-9">
                            <input type="number" name="stock_amount" value="{{$product->stock_amount}}" class="form-control" id="inputEmail3"/>
                            <span class="text-danger">{{$errors->has('stock_amount') ? $errors->first('stock_amount') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Product Short Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="short_description" id="inputPassword3">{{$product->short_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Product Long Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control summernote" name="long_description" id="inputPassword3">{{$product->long_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Product Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file" name="image" accept="image/*"/>
                            <img src="{{asset($product->image)}}" alt="" height="70" width="55"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Product Sub Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file" name="sub_image[]" accept="image/*" multiple/>
                            @foreach($product->subImages as $subImage)
                                <img src="{{asset($subImage->image)}}" alt="" height="70" width="55"/>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Publication Status</label>
                        <div class="col-sm-9">
                            <label><input type="radio" {{$product->status == 1 ? 'checked' : ''}} name="status" value="1">published</label>
                            <label><input type="radio" {{$product->status == 0? 'checked' : ''}} name="status" value="0">unpublished</label>
                        </div>
                    </div>

                    <div class="col-sm-offset-2">
                        <button type="submit" class="btn btn-default">Update Product Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


