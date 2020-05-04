<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\CardCategory;
use App\Models\Comment;

class ProductCard extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'card_category_id',
        'name',
        'description',
        'images',
        'address',
        'latitude',
        'longitude'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    protected $with = [
        'category',
        'comments.user'
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
        return $this->hasOne(CardCategory::class, 'id','card_category_id');
    }

    /**
     * Comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_card_id','id');
    }
}
