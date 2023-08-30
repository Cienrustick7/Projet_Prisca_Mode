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
            $table->int('tete');
            $table->int('cou');
            $table->int('epaule');
            $table->int('longueur_de_bras');
            $table->int('poitrine');
            $table->int('tour_de_taille');
            $table->int('longueur_du_corps');
            $table->int('hanches');
            $table->int('cuisse');
            $table->int('genou');
            $table->int('mollet');
            $table->int('cheville');
            $table->int('biceps');
            $table->int('coude');
            $table->int('avant_bras');
            $table->int('poignet');
            $table->int('poignet_coude');
            $table->int('entrejambe');
            $table->int('genou_cheville');
            $table->int('couture_exterieure');
            $table->int('hauteur_totale');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade')->onUpdate('cascade');
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
