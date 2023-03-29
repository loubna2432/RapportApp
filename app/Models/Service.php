<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function fonctionnaires(){
        return $this->hasMany(Fonctionnaire::class,'services_id','id');
    }
}
