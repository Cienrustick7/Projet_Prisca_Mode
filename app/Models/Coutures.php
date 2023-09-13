<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Paiements;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coutures extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'date_depot',
        'date_recuperation',
        'modeles_id',
        'clients_id',
    ];

    public function paiements(): HasMany
{
    return $this->hasMany(Paiement::class);
}


public function clients(): BelongsTo
{
    return $this->belongsTo(Clients::class);
}

public function modeles(): BelongsTo
{
    return $this->belongsTo(Modeles::class);
}


}




