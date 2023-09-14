<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Clients;
use App\Models\Modeles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesures extends Model
{
    use HasFactory;

    protected $guarded = [


        ];
        use HasFactory;
        
        function Client(){
            return $this->belongsTo(Clients::class, 'clients_id');
           }

           function Modele(){
            return $this->belongsTo(Modeles::class, 'modeles_id');
           }


}
