<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function produits(){
        return $this->hasMany(Produit::class);
    }
    public function imagesBoutique(){
        return $this->hasMany(ImagesBoutique::class);
    }
}
