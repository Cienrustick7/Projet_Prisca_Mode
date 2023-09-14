<?php

namespace App\Models;
use App\Models\Mesures;
use App\Models\Coutures;
use App\Models\Rendez_vous;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prenom',
        'adresse',
        'telephone',
        'sexe',
    ];

   function Couture(){
    return $this->hasOne(Couture::class);
   }


   function Mesure(){
    return $this->hasOne(Mesure::class);
   }

   function Rendez_vous(){
    return $this->hasOne(Rendez_vous::class);
   }
}




