<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;


    public static $subCategory;
    public static $imageUrl;
    public static $directory;
    public static $imageName;

    public static function getImageURL($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'sub-category-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newSubCategory($request)
    {
        self::$subCategory = new SubCategory();
        self::$subCategory->category_id       = $request->category_id;
        self::$subCategory->name              = $request->name;
        self::$subCategory->description       = $request->description;
        self::$subCategory->image             = self::getImageURL($request->file('image'));
        self::$subCategory->status            = $request->status;
        self::$subCategory->save();
    }

    public static function  updateSubCategory($request, $id)
    {
        self::$subCategory = SubCategory::find($id);

        if ($image = $request->file('image'))
        {
            if (file_exists(self::$subCategory->image))
            {
                unlink(self::$subCategory->image);
            }
            self::$imageUrl = self::getImageURL('image');
        }
        else
        {
            self::$imageUrl = self::$subCategory->image;
        }

        self::$subCategory->category_id       = $request->category_id;
        self::$subCategory->name              = $request->name;
        self::$subCategory->description       = $request->description;
        self::$subCategory->image             = self::$imageUrl;
        self::$subCategory->status            = $request->status;
        self::$subCategory->save();
    }

    public static function deleteSubCategory($id)
    {
        self::$subCategory = SubCategory::find($id);
        if (file_exists(self::$subCategory->image))
        {
            unlink(self::$subCategory->image);
        }
        self::$subCategory->delete();
    }



    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
