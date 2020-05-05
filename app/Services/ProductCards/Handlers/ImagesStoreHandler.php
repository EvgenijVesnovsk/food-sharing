<?php

namespace App\Services\ProductCards\Handlers;

use App\Jobs\ImageOptimize;
use App\Jobs\ImageResize;
use App\Jobs\Queues;
use Illuminate\Support\Facades\File;

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
        if(!File::isDirectory($root)) {
            File::makeDirectory($root);
        }
        if(!File::isDirectory($root.'/medium')) {
            File::makeDirectory($root.'/medium');
        }
        if(!File::isDirectory($root.'/small')) {
            File::makeDirectory($root.'/small');
        }

        $imagesPath = [];
        foreach ($images as $image) {
            $path = $image->store('images/product_cards/' . $productId . '/original', 'public');
            ImageOptimize::dispatch($path)->onQueue(Queues::IMAGE_OPTIMIZE);
            $baseName = basename($path);
            ImageResize::dispatch($root.'/original/'.$baseName, self::MEDIUM_SIZE, $root.'/medium/'.$baseName)->onQueue(Queues::IMAGE_RESIZE);
            ImageResize::dispatch($root.'/original/'.$baseName, self::SMALL_SIZE, $root.'/small/'.$baseName)->onQueue(Queues::IMAGE_RESIZE);
            $imagesPath[] = $baseName;
        }

        return $imagesPath;
    }
}
