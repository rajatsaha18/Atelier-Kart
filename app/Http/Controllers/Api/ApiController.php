<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private $category;
    private $products;
    public function getAllCategory(){
        $this->category = Category::all();
        return response()->json($this->category);
    }
    public function getAllProduct(){
        $this->products = Product::orderBy('id', 'desc')->take(8)->get(['id', 'name', 'selling_price','regular_price', 'image']);
        foreach($this->products as $product){
            $product->image = asset($product->image);

        }
        return response()->json($this->products);
    }

    public function getProductByCategory($id){
        $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get(['id', 'name', 'selling_price', 'regular_price', 'image']);
        foreach($this->products as $product){
            $product->image = asset($product->image);
        }
        return response()->json($this->products);

    }
}
