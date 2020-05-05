<?php


namespace App\Helpers;

use Intervention\Image\ImageManagerStatic as Image;

class ImageResize
{
    /**
     * Обрезка фотографий
     *
     * @param $filePath
     * @param $resizeSize
     * @param $pathToSave
     */
    public static function imageResize($filePath, $resizeSize, $pathToSave)
    {
        $image = Image::make($filePath);
        $image->resize($resizeSize, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($pathToSave, 85);
    }
}
