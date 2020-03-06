<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Device extends Model
{
    protected $fillable = [
        'description',
        "manufacturer_id"
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->serial = (string) Str::uuid();
        });
    }

    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }

}
