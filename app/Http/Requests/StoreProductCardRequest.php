<?php

namespace App\Http\Requests;

use App\Services\Geocode\GeocodeService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'address' => 'required|max:255',
            'images' => 'array|min:1|max:5',
            'images.*' => 'image',
        ];
    }

    public function withValidator($validator)
    {
        $this->merge([
            'user_id' => Auth::id(),
        ]);

        $validator->after(function ($validator) {
            $geocode_service = resolve(GeocodeService::class);
            $point = $geocode_service->getCoordinatesByAddress($this->address);

            if (!is_null($point)) {
                $this->merge([
                    'latitude' => $point[0],
                    'longitude' => $point[1],
                ]);
            } else {
                $validator->errors()->add('field', 'Address is wrong!');
            }
        });
    }
}
