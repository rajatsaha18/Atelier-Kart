<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private $category;
    public function getAllCategory(){
        $this->category = Category::all();
        return response()->json($this->category);
    }
}
