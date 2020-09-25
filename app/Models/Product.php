<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'isPriceNegotiate' => 'boolean',
        'isPossibleToChange' => 'boolean',
        'sub_category_id' => 'integer',
        'image_id' => 'integer',
        'shop_id' => 'integer',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
