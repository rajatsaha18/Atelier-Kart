@extends('admin.master')

@section('title')
    Dashboard | Manage Order
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive bs-example widget-shadow">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <h4 class="text-center">All Order Info</h4>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Order No</th>
                                <th>Customer Info</th>
                                <th>Order Status</th>
                                <th>Order Date</th>
                                <th>Payment type</th>
                                <th>Payment Status</th>
                                <th>Action</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->customer?->name.'('.$order->customer?->mobile.')'}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->order_date }}</td>
                                    <td>{{$order->payment_method == 1 ? 'Cash On Delivery' : 'Online Payment'}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>
                                        <a href="{{route('admin-order.detail',['id' => $order->id])}}" class="btn btn-primary btn-sm"
                                           title="View Order Detail">
                                            <i class="fa fa-book"></i>
                                        </a>

                                        <a href="{{route('admin-order.view-invoice',['id' => $order->id])}}" class="btn btn-info btn-sm"
                                           title="View Order Invoice">
                                            <i class="fa fa-instagram"></i>
                                        </a>

                                        <a href="{{route('admin-order.download-invoice',['id' => $order->id])}}" class="btn btn-warning btn-sm"
                                           title="Download Order Invoice" target="_blank">
                                            <i class="fa fa-download"></i>
                                        </a>
                                        <a href="{{route('admin-order.edit', ['id' => $order->id])}}" class="btn btn-success btn-sm"
                                           title="Edit Order">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('admin-order.delete',['id' => $order->id])}}" class="btn btn-danger btn-sm {{$order->order_status == "Complete" || $order->order_status == "Processing" ? 'disabled' : ''}} "
                                           title="Delete Order" onclick="return confirm('Are you sure delete this');">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

