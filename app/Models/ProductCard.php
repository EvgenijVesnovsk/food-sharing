<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\CardCategory;

class ProductCard extends Model
{
    use SoftDeletes;

    protected $casts = [
        'images' => 'array',
    ];

    /**
     * User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * CardCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(CardCategory::class);
    }
}
