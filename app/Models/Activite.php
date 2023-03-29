<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'intitilé',
        'description',
        
        
    ];

    public function contraints(){
        return $this->hasMany(Contrainte::class);
    }

    public function fonctionnaires(){
        return $this->belongsToMany(Fonctionnaire::class,'realiseractivites');
    }
}
