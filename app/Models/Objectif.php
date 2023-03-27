<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    
    protected $fillable = [
        'titre',
        'description',
        'date_debut',
        'date_fin',
        'status',
        'progression',
       

        
    ];
    use HasFactory;
    public function user(){
        return $this->belongsToMany(User::class,'employe_objectif','user_id','objectif_id');
    }
}
