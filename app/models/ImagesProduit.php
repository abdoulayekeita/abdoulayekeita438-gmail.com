<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ImagesProduit extends Model
{
    protected $table ='imagesProduits';
    protected $guarded = [];
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
