<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;
    public static $product;
    public static $otherImage;
    public static $otherImages;
    public static $imageUrl;
    public static $directory;
    public static $imageName;

    public static function getImageURL($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'other-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newOtherImage($product, $request)
    {
        foreach ($request->file('other_image') as $image)
        {
            self::$otherImage = new OtherImage();
            self::$otherImage->product_id        = $product->id;
            self::$otherImage->image             = self::getImageURL($image);
            self::$otherImage->save();
        }

    }
    public static function updateOtherImage($product, $request)
    {
        self::$otherImages = OtherImage::where('product_id', $product->id)->get();
        foreach (self::$otherImages as $otherImage)
        {
            if (file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }
        self::newOtherImage($product, $request);
    }

    public static function deleteOtherImage($id)
    {
        self::$otherImages = OtherImage::where('product_id', $id)->get();
        foreach (self::$otherImages as $otherImage)
        {
            if (file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }
    }

}
