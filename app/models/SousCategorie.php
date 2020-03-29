<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    protected $guarded = [];
    protected $table ='sousCategories';
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
