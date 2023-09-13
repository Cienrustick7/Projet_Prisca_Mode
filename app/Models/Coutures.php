<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Paiements;
class Coutures extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'date_depot',
        'date_recuperation',
        'models_id',
        'clients_id',
    ];

    public function paiements(): HasMany
{
    return $this->hasMany(Paiement::class);
}

}




