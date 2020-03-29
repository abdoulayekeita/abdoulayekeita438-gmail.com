<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
