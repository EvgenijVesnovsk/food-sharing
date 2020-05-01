<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CardCategory extends Model
{
    use SoftDeletes;

    public function productCard()
    {
        return $this->belongsTo('App\Models\ProductCard');
    }
}
