<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ProductCard;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'product_card_id',
        'comment'
    ];

    /**
     * User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

    /**
     * ProductCard
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCard()
    {
        return $this->belongsTo(ProductCard::class);
    }
}
