<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mount extends Model
{
    public function locations()
    {
        return $this->belongsTo('App\Location','location_id','id');
    }

    protected $fillable = [
        'name', 'height', 'terms', 'desc', 'location_id', 'price', 'imageCover', 'image_1', 'image_2','image_3','link','waktu'
    ];
}
