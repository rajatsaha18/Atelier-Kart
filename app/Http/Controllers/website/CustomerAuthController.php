<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;
    public function login()
    {
        return view('website.auth.login');
    }

    public function signUp()
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'mobile' => 'required',
        // ]);
        return view('website.auth.signup');
    }

    public function newCustomer(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required',
            'mobile'    => 'required',
        ]);
        $this->customer = Customer::newCustomerRegister($request);

        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);

        return redirect('/customer-dashboard');
    }

    public function signIn(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if ($this->customer) {
            if (password_verify($request->password, $this->customer->password)) {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);

                return redirect('/customer-dashboard');
            } else {
                return redirect()->back()->with('message', 'sorry your password is incorrect');
            }
        } else {
            return redirect()->back()->with('message', 'sorry your email address is invalid');
        }
    }



    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }
}
