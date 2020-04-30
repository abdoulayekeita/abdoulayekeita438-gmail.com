<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'isPriceNegotiate',
        'isPossibleToChange',
        'description',
        'sub_category_id',
        'image_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'price' => 'decimal',
        'isPriceNegotiate' => 'boolean',
        'isPossibleToChange' => 'boolean',
        'sub_category_id' => 'integer',
        'image_id' => 'integer',
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
