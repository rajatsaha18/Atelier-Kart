@extends('admin.master')

@section('title')
    Dashboard | Manage User Page
@endsection

@section('body')
    <div class="table-responsive bs-example widget-shadow">
        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        <h4 class="text-center">All User Info</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Sl No.</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Mobile</th>
                <th>Action</th>

            </tr>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile }}</td>
                    <td>
                        <a href="{{route('user.delete',['id' => $user->id])}}" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm('Are you sure delete this');">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

