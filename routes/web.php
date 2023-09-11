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


Route::get('clients', [ClientsController::class,'clients'])->name('clients');

Route::get('ajout_client', [ClientsController::class,'form_client'])->name('form_client');

Route::post('ajouter_traitement', [ClientsController::class,'ajouter_client_traitement']);

Route::get('Modeles', [ModelesController::class,'Modeles'])->name('Modeles');

Route::get('ajout_modele', [ModelesController::class,'form_modele'])->name('form_modele');

Route::get('mesures', [MesuresController::class,'mesures'])->name('mesures');

Route::get('coutures', [CouturesController::class,'coutures'])->name('coutures');

Route::get('ajout-couture', [CouturesController::class,'form_couture'])->name('form_couture');

Route::get('paiements', [PaiementsController::class,'paiements'])->name('paiements');

Route::get('ajout_paiment', [PaiementsController::class,'form_paiement'])->name('form_paiement');

Route::post('enregistrement_paiement', [PaiementsController::class,'ajout_paiement']);

Route::get('ajout_personnel', [PersonnelsController::class,'form_personnel'])->name('form_personnel');

Route::post('enregistrement_personnel', [PersonnelsController::class,'ajouter_personnel']);

Route::get('personnels', [PersonnelsController::class,'personnels'])->name('personnels');

Route::get('rendez_vous', [Rendez_vouscontroller::class,'rendez_vous'])->name('rendez_vous');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
