<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    use HasFactory;

    protected $filable=['codigo','nombre','estado'];

    public function planes(){

        
        return $this->hasOne('App\Models\Plan');
    }
}
