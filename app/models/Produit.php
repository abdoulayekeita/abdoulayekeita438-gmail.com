<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded = [];
    public function boutique()
    {
        return $this->belongsTo(Boutique::class);
    }
    public function imagesPrduit(){
        return $this->hasMany(ImagesProduit::class);
    }
}
