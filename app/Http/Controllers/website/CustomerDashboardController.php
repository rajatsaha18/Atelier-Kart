<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerDashboardController extends Controller
{
    private $orders;
    public function index()
    {
        $this->orders = Order::where('customer_id', Session::get('customer_id'))->orderBy('id', 'desc')->get();
        return view('website.customer.home', ['orders' => $this->orders]);
    }

    public function profile()
    {
        return view('website.customer.profile');
    }

    public function account()
    {
        return view('website.customer.account');
    }

}
