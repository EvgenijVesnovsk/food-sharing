<?php


namespace App\Services\Geocode;

use Illuminate\Support\Facades\Http;

class GeocodeService
{
    /**
     * Получиь адресс точки по координатам
     *
     * @param $product
     */
    public function getAddressByCoordinates($product)
    {
        if(empty($product->latitude) || empty($product->longitude)){
            return [];
        }

        return Http::get(env('YANDEX_MAP_API_URL').'?apikey='.env('YANDEX_MAP_API_KEY').'&geocode='.$product->latitude.','.$product->longitude);
    }

    /**
     * Получить координаты точки по адресу
     *
     * @param $address
     * @return array|null
     */
    public function getCoordinatesByAddress($address) :?array
    {
        $response = Http::get(env('YANDEX_MAP_API_URL').'?apikey='.
            env('YANDEX_MAP_API_KEY').'&format=json&geocode='.$address);

        $point = \Arr::get($response, 'response.GeoObjectCollection.featureMember.0.GeoObject.Point.pos');

        if (!is_null($point)) {
            $point = explode(' ', $point);
        }

        return $point;
    }
}
