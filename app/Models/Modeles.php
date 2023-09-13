<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modeles extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_modele',
        'nom_modele',
        'image',
        ];

        public function mesures(): HasMany
{
    return $this->hasMany(Mesures::class);
}

public function coutures(): HasMany
{
    return $this->hasMany(Coutures::class);
}
}
