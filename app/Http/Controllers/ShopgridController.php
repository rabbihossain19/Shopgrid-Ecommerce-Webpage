<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ShopgridController extends Controller
{
    private $categories;
    private $subCategories;
    private $product;
    private $products;



    public function index()
    {
        $this->products = Product::orderBy('id', 'desc')->take(8)->get();
        return view('front.home.index', ['products' => $this->products]);
    }

    public function category($id)
    {
        $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('front.category.index', ['products' => $this->products]);
    }

    public function subCategory($id)
    {
        $this->products = Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get();
        return view('front.category.index', ['products' => $this->products]);
    }

    public function detail($id)
    {
        $this->product = Product::find($id);
        return view('front.detail.index', ['product' => $this->product]);
    }
}
