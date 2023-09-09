<?php

namespace App\Livewire;

use App\Models\Clients;
use App\Models\Coutures;
use Livewire\Component;

class CouturesClientsSelect extends Component
{
    public $couture_id; // L'identifiant du couture
    public $client_id; // L'identifiant de client
    public $clients; // la collection des clients

    public function mount() {
        // On affecte une collection vide
        $this->clients = collect();
    }

    // Quand $couture_id change, on charge les $client de $couture_id
    public function updatedCountryId ($newValue) {
        $this->clients = Clients::where("couture_id", $newValue)->orderBy("name")->get();
    }

    public function render()
    {
        // On récupère la couture
        $cout = Coutures::select("id", "name")->get();

        // On retourne la vue avec les pays
        return view('livewire.coutures-clients-select', [
            'coutures' => $cout
        ]);
    }

}
