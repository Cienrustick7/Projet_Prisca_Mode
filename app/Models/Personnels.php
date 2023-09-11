<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnels extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prenom',
        'adresse',
        'telephone',
        'type_personnel',
    ];
}
