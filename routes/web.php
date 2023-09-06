<?php

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

Route::get('/', function () {
    return view('welcome');


});Route::get('/', function () {
    return view('welcome');
});


Route::get('client.clients', [clientscontroller::class,'clients'])->name('clents');

Route::get('modele-Modeles', [modelsController::class,'Modeles'])->name('Modeles');


Route::get('mesure-mesures', [MesuresController::class,'mesures'])->name('mesures');

Route::get('couture-coutures', [CouturesController::class,'coutures'])->name('coutures');

Route::get('views-paiements', [paiementsController::class,'paiements'])->name('paiements');

Route::get('views-personnels', [personnelsController::class,'personnels'])->name('personnels');

Route::get('views-Rendez_vous', [rendez_vousController::class,'Rendez_vous'])->name('Rendez_vous');

Route::get('ajout-modele', [ModelsController::class,'form_modele'])->name('form_modele');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
