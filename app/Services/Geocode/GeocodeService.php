<?php


namespace App\Services\Geocode;

use Illuminate\Support\Facades\Http;

class GeocodeService
{
    public function getAddressByCoordinates($product)
    {
        if(empty($product->latitude) || empty($product->longitude)){
            return [];
        }

        return Http::get('https://geocode-maps.yandex.ru/1.x/?apikey='.env('YANDEX_MAP_API_KEY').'&geocode='.$product->latitude.','.$product->longitude);
    }
}
