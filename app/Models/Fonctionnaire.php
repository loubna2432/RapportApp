<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonctionnaire extends Model
{
    use HasFactory;

    
    protected $table='fonctionnaires';
    protected $fillable = [
        'services_id',
        'nom',
        'prenom',
        'CIN',
        
        'email',
        'N_SOM',
        'telephon',
        'statue',
        'grade'
        
    ];

    public function service(){
        return $this->belongsTo(Service::class,'services_id','id');
    }

    public function propositions(){
        return $this->hasMany(Proposition::class);
    }

    public function activites(){
        return $this->belongsToMany(Activite::class,'realiseractivites');
    }

    public function actions(){
        return $this->belongsToMany(Action::class,'realiseractions');
    }
}
