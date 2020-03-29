<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Categorie extends Model
{
    protected $guarded = [];
// all sous categorie of a categorie
    public function sousCategorie(){
        return $this->hasMany(SousCategorie::class);
    }
}
