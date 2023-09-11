<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coutures extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant',
        'date_depot',
        'date_recuperation',
        'models_id',
        'clients_id',
    ];

}
