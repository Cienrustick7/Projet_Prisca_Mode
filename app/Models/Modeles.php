<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Coutures;

class Modeles extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_modele',
        'nom_modele',
        'image',
        ];

        function Couture(){
            return $this->hasOne(Couture::class);
           }
}
