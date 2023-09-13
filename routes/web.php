<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CouturesController;
use App\Http\Controllers\MesuresController;
use App\Http\Controllers\ModelesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaiementsController;
use App\Http\Controllers\PersonnelsController;
use App\Http\Controllers\Rendez_vousController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [PagesController::class,'index']);


Route::get('liste_des_clients', [ClientsController::class,'clients'])->name('clients');

Route::get('formulaire_client', [ClientsController::class,'form_client'])->name('form_client');

Route::post('ajouter_clients', [ClientsController::class,'store'])->name('store_client');

Route::get('Modeles', [ModelesController::class,'Modeles'])->name('Modeles');

Route::get('ajout_modele', [ModelesController::class,'form_modele'])->name('form_modele');

Route::post('enregistrement_modele', [ModelesController::class,'ajouter_modele'])->name('ajouter_modele');

Route::get('liste_des_mesures', [MesuresController::class,'mesures'])->name('mesures');

Route::get('formulaire-mesure', [MesuresController::class,'form_mesure'])->name('form_mesure');

Route::post('ajouter_mesure', [MesuresController::class,'store'])->name('store_mesure');

Route::get('liste_des_coutures', [CouturesController::class,'coutures'])->name('coutures');

Route::get('formulaire-couture', [CouturesController::class,'form_couture'])->name('form_couture');

Route::post('ajouter_couture', [CouturesController::class,'store'])->name('store_couture');

Route::get('liste_paiements', [PaiementsController::class,'paiements'])->name('paiements');

Route::get('formulaire_paiment', [PaiementsController::class,'form_paiement'])->name('form_paiement');

Route::post('ajouter_paiement', [PaiementsController::class,'restore'])->name('store_paiement');

Route::get('ajout_personnel', [PersonnelsController::class,'form_personnel'])->name('form_personnel');

Route::post('enregistrement_personnel', [PersonnelsController::class,'ajouter_personnel']);

Route::get('personnels', [PersonnelsController::class,'personnels'])->name('personnels');

Route::get('rendez_vous', [Rendez_vouscontroller::class,'rendez_vous'])->name('rendez_vous');

Route::get('rv.ajout_rendez_vous', [Rendez_vousController::class,'form_rendez_vous'])->name('form_rendez_vous');

Route::post('ajouter_traitement', [Rendez_vousController::class,'ajouter_rendez_vous_traitement']);



Route::controller(PaiementsController::class)->group(function () {

    Route::get('coutures/{libelle}/paiements', 'index')->name('paiements.coutures');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
