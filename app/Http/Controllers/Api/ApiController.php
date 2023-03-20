<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private $category;
    private $subCategories;
    private $products;
    private $product;
    private $result;
    public function getAllCategory(){
        $this->category = Category::all();
        foreach($this->category as $key => $category)
        {
            $this->subCategories = SubCategory::where('category_id', $category->id)->get();
            $this->result[$key]["category"] = $category;
            $this->result[$key]["sub_category"] = $this->subCategories;
        }
        return response()->json($this->result);
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

    public function getProductById($id){
        $this->product = Product::find($id);
        $this->product->image = asset($this->product->image);
        return response()->json($this->product);
    }
}
