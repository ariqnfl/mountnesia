<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function mounts()
    {
        return $this->hasOne('App\Mount','location_id','id');
    }

    //
    protected $fillable = [
        'name'
    ];
}
