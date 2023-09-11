<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'date_rendez_vous',
        
    ];
}
