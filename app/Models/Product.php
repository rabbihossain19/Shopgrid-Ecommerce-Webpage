<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $product;
    public static $imageUrl;
    public static $directory;
    public static $imageName;

    public static function getImageURL($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'product-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProduct($request)
    {
        self::$product = new Product();
        self::$product->category_id       = $request->category_id;
        self::$product->sub_category_id   = $request->sub_category_id;
        self::$product->brand_id          = $request->brand_id;
        self::$product->unit_id           = $request->unit_id;
        self::$product->name              = $request->name;
        self::$product->code              = $request->code;
        self::$product->sku               = $request->sku;
        self::$product->regular_price     = $request->regular_price;
        self::$product->selling_price     = $request->selling_price;
        self::$product->short_description = $request->short_description;
        self::$product->long_description  = $request->long_description;
        self::$product->image             = self::getImageURL($request->file('image'));
        self::$product->status            = $request->status;
        self::$product->save();
        return self::$product;
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageURL($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }


        self::$product->category_id       = $request->category_id;
        self::$product->sub_category_id   = $request->sub_category_id;
        self::$product->brand_id          = $request->brand_id;
        self::$product->unit_id           = $request->unit_id;
        self::$product->name              = $request->name;
        self::$product->code              = $request->code;
        self::$product->sku               = $request->sku;
        self::$product->regular_price     = $request->regular_price;
        self::$product->selling_price     = $request->selling_price;
        self::$product->short_description = $request->short_description;
        self::$product->long_description  = $request->long_description;
        self::$product->image             = self::$imageUrl;
        self::$product->status            = $request->status;
        self::$product->save();
        return self::$product;
    }

    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function subCategory()
    {
        return $this->belongsTo('App\Models\SubCategory');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    public function unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }
    public function otherImages()
    {
        return $this->hasMany('App\Models\OtherImage');
    }
}
