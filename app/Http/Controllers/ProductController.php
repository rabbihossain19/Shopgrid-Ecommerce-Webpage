<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $products;
    private $categoryId;
    private $subCategories;


    public function index()
    {
        return view('admin.product.index',[
            'categories'     => Category::all(),
            'sub_categories' => SubCategory::all(),
            'brands'          => Brand::all(),
            'units'           => Unit::all(),

        ]);
    }

    public function getSubCategory()
    {
        $this->categoryId = $_GET['id'];
        $this->subCategories = SubCategory::where('category_id', $this->categoryId)->get();
        return response()->json($this->subCategories);
    }

    public function create(Request $request)
    {
        $this->product = Product::newProduct($request);
        OtherImage::newOtherImage($this->product, $request);
        return redirect()->back()->with('message', 'Product info create successfully. ');
    }

    public function manage()
    {
        $this->products = Product::all();
        return view('admin.product.manage', ['products' => $this->products]);
    }

    public function detail($id)
    {
        return view('admin.product.detail', ['product' => Product::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.product.edit',[
            'categories'     => Category::all(),
            'sub_categories' => SubCategory::all(),
            'brands'          => Brand::all(),
            'units'           => Unit::all(),
            'product'        => Product::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->product = Product::updateProduct($request, $id);
        if ($request->file('other_image'))
        {
            OtherImage::updateOtherImage($this->product, $request);
        }
        return redirect('/manage-product')->with('message', 'Product info Update Successfully');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        OtherImage::deleteOtherImage($id);
        return redirect('/manage-product')->with('message', 'Product info delete Successfully');
    }


}
