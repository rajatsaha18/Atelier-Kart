<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $categories;
    private $subCategories;
    private $subCategory;
    public function index()
    {

        $this->categories = Category::all();
        return view('admin.subcategory.index', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:sub_categories'
        ]);
        SubCategory::newSubCategory($request);
        return redirect()->back()->with('message', 'Create Sub Category Successfully');
    }

    public function manage()
    {
        $this->subCategories = SubCategory::all();
        return view('admin.subcategory.manage', ['subCategories' => $this->subCategories]);
    }

    public function edit($id)
    {
        $this->subCategory = SubCategory::find($id);
        return view('admin.subcategory.edit', ['subCategory' => $this->subCategory]);
    }

    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request,$id);
        return redirect('/manage-sub-category')->with('message', 'Update Sub Category Successfully');
    }

    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect()->back()->with('message', 'Delete Sub Category Successfully');
    }

}
