<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'product_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function getImagencodeAttribute(){
        $image = env('AWS_URL')."/".$this->url;
        $type = pathinfo($image, PATHINFO_EXTENSION);
        $data = file_get_contents($image);
        return $dataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);
//       return $image_64 = base64_encode(file_get_contents(env('AWS_URL')."/".$this->url));
    }
}
