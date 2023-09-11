<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeles extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_modele',
        'nom_modele',
        'image',
        ];
}
