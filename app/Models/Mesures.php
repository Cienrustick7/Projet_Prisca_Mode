<?php

namespace App\Models;
use App\Models\Clients;
use App\Models\Modeles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesures extends Model
{
    use HasFactory;

    protected $fillable = [

        'tete',
        'cou',
        'epaule',
        'longueur_de_bras',
        'poitrine',
        'tour_de_taille',
        'longueur_du_corps',
        'hanches',
        'cuisse',
        'genou',
        'mollet',
        'cheville',
        'biceps',
        'coude',
        'avant_bras',
        'poignet',
        'poignet_coude',
        'entrejambe',
        'genou_cheville',
        'couture_exterieure',
        'hauteur_totale',
        'clients_id',
        'modeles_id',
        ];

        public function clients(): BelongsTo
        {
            return $this->belongsTo(Clients::class);
        }

        public function modeles(): BelongsTo
        {
            return $this->belongsTo(Modeles::class);
        }

}
