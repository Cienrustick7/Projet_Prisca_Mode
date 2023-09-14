<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;
class Rendez_vous extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'date_rdv',
        'clients_id',
    ];

    function Client(){
        return $this->belongsTo(Clients::class, 'clients_id');
       }
}
