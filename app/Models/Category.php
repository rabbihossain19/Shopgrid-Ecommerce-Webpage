<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $name;
    public static $description;
    public static $image;
    public static $status;

    public static $category;
    public static $imageUrl;
    public static $directory;
    public static $imageName;

    public static function getImageURL($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'category-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newCategory($request)
    {
        self::$category = new Category();
        self::$category->name              = $request->name;
        self::$category->description       = $request->description;
        self::$category->image             = self::getImageURL($request->file('image'));
        self::$category->status            = $request->status;
        self::$category->save();
    }

    public static function  updateCategory($request, $id)
    {
        self::$category = Category::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::getImageURL($request->file('image'));

        }
        else
        {
            self::$imageUrl = self::$category->image;
        }
        self::$category->name              = $request->name;
        self::$category->description       = $request->description;
        self::$category->image             = self::$imageUrl;
        self::$category->status            = $request->status;
        self::$category->save();
    }

    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
