<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImageResize implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;
    protected $resizeSize;
    protected $pathToSave;

    public function __construct($filePath, $resizeSize, $pathToSave)
    {
        $this->filePath = $filePath;
        $this->resizeSize = $resizeSize;
        $this->pathToSave = $pathToSave;
    }

    public function handle()
    {
        \App\Helpers\ImageResize::imageResize($this->filePath, $this->resizeSize, $this->pathToSave);
    }
}
