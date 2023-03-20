<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    private $orders;
    public function index(){
        return view('admin.report.monthly-order');

    }

    public function create(Request $request){
        $startTimeStamp = strtotime($request->start_date);
        $endTimeStamp = strtotime($request->end_date);
        if($startTimeStamp > $endTimeStamp){
            return redirect()->back()->with('message', 'Start date must be smaller than end date');
        }
        $this->orders = Order::where('order_timestamp' ,'>=', $startTimeStamp)
                              ->where('order_timestamp','<=',$endTimeStamp)
                              ->orderBy('id', 'desc')->get();
        return view('admin.report.monthly-order');
    }
}
