<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    private $categories;
    private $products;
    private $product;
    public function index()
    {

        $this->products = Product::orderBy('id', 'desc')->take(8)->get(['id','name', 'selling_price','regular_price', 'image', 'stock_amount', 'category_id']);
        return view('website.home.home',[

            'products' => $this->products,
        ]);
    }

    public function category($id)
    {

        $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('website.category.category',[
            'products' => $this->products
        ]);
    }

    public function subCategory($id)
    {
        $this->products = Product::where('subcategory_id',$id)->orderBy('id', 'desc')->get();
        return view('website.subcategory.subcategory',[
            'products' => $this->products
        ]);
    }

    public function detail($id)
    {
        $this->product = Product::find($id);
        return view('website.detail.detail', ['product' => $this->product]);
    }

    public function about()
    {
        return view('website.about.about');
    }

    public function bestDeal()
    {
        return view('website.best-deal.best-deal');
    }

    public function service()
    {
        return view('website.service.service');
    }

    public function contact()
    {
        return view('website.contact.contact');
    }

    public function events()
    {
        return view('website.events.events');
    }

    public function checkout()
    {
        return view('website.checkout.checkout');
    }
}
