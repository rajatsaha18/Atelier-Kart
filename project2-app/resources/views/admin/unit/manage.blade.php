@extends('admin.master')

@section('title')
    Dashboard | Manage Unit Page
@endsection

@section('body')
    <div class="table-responsive bs-example widget-shadow">
        <h4 class="text-center text-center">{{Session::get('message')}}</h4>
        <h4>All Unit Info</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Sl No.</th>
                <th>Unit Name</th>
                <th>Unit Code</th>
                <th>Unit Description</th>
                <th>Publication</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($units as $unit)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$unit->name}}</td>
                <td>{{$unit->code}}</td>
                <td>{{$unit->description}}</td>
                <td>{{$unit->status == 1 ? 'published' : 'unpublished'}}</td>
                <td>
                    <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{route('unit.delete', ['id' => $unit->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ? ')">Delete</a>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
