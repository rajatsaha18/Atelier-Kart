@extends('admin.master')

@section('title')
    Dashboard | Edit Order
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive bs-example widget-shadow">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <h4 class="text-center">All Order Info</h4>
                        <form action="{{route('admin-order.update',['id' => $order->id])}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Order No</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly value="{{$order->id}}" class="form-control"/>
                                </div>
                            </div></br></br>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Order Date</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly value="{{$order->order_date}}" class="form-control"/>
                                </div>
                            </div></br></br>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Total Payable</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly value="{{number_format($order->order_total)}}" class="form-control"/>
                                </div>
                            </div></br></br>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Order Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="order_status">
                                        <option value="Pending">Pending</option>
                                        <option value="Processing">Processing</option>
                                        <option value="Complete">Complete</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </div>
                            </div></br></br>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Payment Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="payment_status">
                                        <option value="Pending">Pending</option>
                                        <option value="Processing">Processing</option>
                                        <option value="Complete">Complete</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </div>
                            </div></br></br>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Delivery Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="delivery_status">
                                        <option value="Pending">Pending</option>
                                        <option value="Processing">Processing</option>
                                        <option value="Complete">Complete</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </div>
                            </div></br></br>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Delivery Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="delivery_address" id="inputPassword3">{{$order->delivery_address}}</textarea>
                                </div>
                            </div></br></br>

                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-9">
                                    <input type="submit"  class="btn btn-success px-5" value="Update Order Status"/>
                                </div>
                            </div></br></br>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
