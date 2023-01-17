<?php

namespace App\Http\Controllers;

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
        return view('admin.sub-category.index', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        SubCategory::newSubCategory($request);
        return redirect()->back()->with('message', 'Subcategory info create successfully');
    }

    public function manage()
    {
        $this->subCategories = SubCategory::all();
        return view('admin.sub-category.manage', ['sub_categories' => $this->subCategories]);
    }

    public function edit($id)
    {
        $this->categories = Category::all();
        $this->subCategory = SubCategory::find($id);
        return view('admin.sub-category.edit', ['categories' => $this->categories, 'sub_category' => $this->subCategory]);
    }

    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/manage-sub-category')->with('message', 'Sub Category Info update Successfully');
    }

    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('/manage-sub-category')->with('message', 'Sub Category Info delete Successfully');
    }

}
