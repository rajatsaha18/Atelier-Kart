@extends('admin.master')

@section('title')
    Edit Brand Page
@endsection

@section('body')
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Edit Brand Form</h4>
                <h4 class="text-center text-success">{{Session::get('message')}}</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="{{route('brand.update', ['id' =>$brand->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Brand Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{$brand->name}}" class="form-control" id="inputEmail3"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Brand Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description" id="inputPassword3">{{$brand->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Brand Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file" name="image"/>
                            <img src="{{asset($brand->image)}}" alt="" height="90" width="75">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Publication</label>
                        <div class="col-sm-9">
                            <label><input type="radio" {{$brand->status == 1 ? 'checked' : 'unchecked'}}  name="status" value="1">published</label>
                            <label><input type="radio" {{$brand->status == 0 ? 'checked' : 'unchecked'}} name="status" value="0">unpublished</label>
                        </div>
                    </div>

                    <div class="col-sm-offset-2">
                        <button type="submit" class="btn btn-default">Update Brand Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


