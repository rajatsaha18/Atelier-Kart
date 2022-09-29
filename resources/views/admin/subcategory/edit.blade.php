@extends('admin.master')

@section('title')
    Dashboard | Edit Sub Category Page
@endsection

@section('body')
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Edit Sub-Category Form</h4>
                <h4 class="text-center text-success">{{Session::get('message')}}</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="{{route('subcategory.update', ['id' => $subCategory->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
{{--                    <div class="form-group">--}}
{{--                        <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <select class="form-control" name="category_id" required>--}}
{{--                                <option value="" disabled selected>-- Select Category --</option>--}}
{{--                                @foreach($categories as $category)--}}
{{--                                    <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                                @endforeach--}}

{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Sub Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{$subCategory->name}}" class="form-control" id="inputEmail3"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Sub Category Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description" id="inputPassword3">{{$subCategory->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Sub Category Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file" name="image"/>
                            <img src="{{asset($subCategory->image)}}" alt="" height="70" width="55"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Publication Status</label>
                        <div class="col-sm-9">
                            <label><input type="radio" {{$subCategory->status == 1 ? 'checked' : ''}} name="status" value="1">published</label>
                            <label><input type="radio" {{$subCategory->status == 0 ? 'checked' : ''}} name="status" value="0">unpublished</label>
                        </div>
                    </div>

                    <div class="col-sm-offset-2">
                        <button type="submit" class="btn btn-default">Update Sub Category Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

