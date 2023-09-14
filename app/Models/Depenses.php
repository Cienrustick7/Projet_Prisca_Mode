<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personnels;
class Depenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'montant',
        'date',
        'personnels_id',
    ];

    function Personnel(){
        return $this->belongsTo(Personnels::class, 'personnels_id');
       }
}
