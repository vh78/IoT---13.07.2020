<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    
    protected $fillable = ['name', 'type', 'description'];
    public function devices(){
        return $this->belongsToMany(Device::class);
    }
}
