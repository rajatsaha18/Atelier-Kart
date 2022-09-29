<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Mail\OrderConfirmationMail;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
use Session;
use Mail;

class CartController extends Controller
{
    private $product;
    private $cartProducts;
    private $customer;
    private $order;
    private $orderDetail;
    private $mailBody;
    public function index(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id' => $this->product->id,
            'name' => $this->product->name,
            'price' => $this->product->selling_price,
            'quantity' => $request->qty,
            'attributes' => [
                'image' => $this->product->image,
            ],
        ]);
        return redirect('/show-cart');

    }

    public function show()
    {
        if(Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $this->customer = '';
        }
        return view('website.cart.show', [
            'products' => Cart::getContent(),
            'customer' => $this->customer
        ]);
    }

    public function newOrder(Request $request)
    {

        if (Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $request->validate([
                'name'              => 'required',
                'email'             => 'required|unique:customers',
                'mobile'            => 'required',
                'delivery_address'  => 'required',
            ]);
            $this->customer = Customer::newCustomer($request);

            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }

        if($request->payment_method == 1)
        {
            $this->order    = Order::newOrder($this->customer,$request);
            OrderDetail::newOrderDetail($this->order);
            $this->cartProducts = Cart::getContent();
            foreach ($this->cartProducts as $cartProduct)
            {
                Cart::remove($cartProduct->id);
            }
            /*===============mail send code================*/
            $this->mailBody = [
                'title' => 'This is mail title',
                'body' => 'This is mail body',

            ];
            Mail::to($this->customer->email)->send(new OrderConfirmationMail($this->mailBody));
            /*===============mail send code================*/


            return redirect('/complete-order')->with('message', 'your order successfully post. please wait we will contact you with soon');

        }
        elseif ($request->payment_method == 2)
        {
            $sslPayment = new SslCommerzPaymentController();
            $sslPayment->onlinePayment($request,$this->customer);

            /*===============mail send code================*/
            $this->mailBody = [
                'title' => 'This is mail title',
                'body' => 'This is mail body',

            ];
            Mail::to($this->customer->email)->send(new OrderConfirmationMail($this->mailBody));
            /*===============mail send code================*/


            return redirect('/complete-order')->with('message', 'your order successfully post. please wait we will contact you with soon');

        }

    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }

    public function remove($id)
    {
        Cart::remove($id);
        return redirect()->back()->with('message', 'Cart Product Remove Successfully');

    }

    public function update(Request $request,$id)
    {
        Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->qty,
            ]
        ]);
        return redirect()->back()->with('message', 'Cart Product Update Successfully');
    }


}
