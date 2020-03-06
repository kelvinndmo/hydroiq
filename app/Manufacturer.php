<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = [
        'name',
    ];


    public function devices(){
        return $this->hasMany(\App\Device::class);
    }

}
