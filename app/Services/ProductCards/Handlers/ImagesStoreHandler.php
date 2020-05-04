<?php

namespace App\Services\ProductCards\Handlers;

use App\Helpers\ImageResize;
use Illuminate\Support\Facades\File;
use ImageOptimizer;

class ImagesStoreHandler
{
    const MEDIUM_SIZE = 348;
    const SMALL_SIZE = 60;

    /**
     * Запись картинок в storage
     *
     * @param $productId
     * @param $images
     * @return array
     */
    public function handler($productId, $images)
    {
        $root = public_path('storage/images/product_cards/'.$productId);
        File::makeDirectory($root);
        File::makeDirectory($root.'/medium');
        File::makeDirectory($root.'/small');

        $imagesPath = [];
        foreach ($images as $image) {
            $path = $image->store('images/product_cards/' . $productId . '/original', 'public');
            ImageOptimizer::optimize(public_path('storage/' . $path));

            $baseName = basename($path);
            ImageResize::imageResize($root.'/original/'.$baseName, self::MEDIUM_SIZE, $root.'/medium/'.$baseName);
            ImageResize::imageResize($root.'/original/'.$baseName, self::SMALL_SIZE, $root.'/small/'.$baseName);
            $imagesPath[] = $baseName;
        }

        return $imagesPath;
    }
}
