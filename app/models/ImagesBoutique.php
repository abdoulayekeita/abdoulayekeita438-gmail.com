<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ImagesBoutique extends Model
{
    protected $table ='imagesBoutiques';
    protected $guarded = [];
    public function boutique()
    {
        return $this->belongsTo(Boutique::class);
    }
}
