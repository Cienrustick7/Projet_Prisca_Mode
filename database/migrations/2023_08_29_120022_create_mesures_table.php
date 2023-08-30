<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->integer('tete');
            $table->integer('cou');
            $table->integer('epaule');
            $table->integer('longueur_de_bras');
            $table->integer('poitrine');
            $table->integer('tour_de_taille');
            $table->integer('longueur_du_corps');
            $table->integer('hanches');
            $table->integer('cuisse');
            $table->integer('genou');
            $table->integer('mollet');
            $table->integer('cheville');
            $table->integer('biceps');
            $table->integer('coude');
            $table->integer('avant_bras');
            $table->integer('poignet');
            $table->integer('poignet_coude');
            $table->integer('entrejambe');
            $table->integer('genou_cheville');
            $table->integer('couture_exterieure');
            $table->integer('hauteur_totale');
            $table->unsignedBigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('modeles_id')->unsigned();
            $table->foreign('modeles_id')->references('id')->on('modeles')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesures');
    }
};
