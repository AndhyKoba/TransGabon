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
        Schema::create('trajet', function (Blueprint $table) {
            $table->id('trajet_id'); // clé primaire personnalisée
    
            $table->unsignedBigInteger('stat_id');       // Clé étrangère vers la table stat (statut ? statistique ?)
            $table->unsignedBigInteger('transport_id');  // Clé étrangère vers la table transports
    
            $table->string('ville_depart');
            $table->string('ville_arrivee');
            $table->dateTime('date_depart');
            $table->dateTime('date_arrivee');
    
            $table->decimal('prix', 8, 2); // jusqu'à 999 999.99
            $table->integer('nb_places_total');
            $table->integer('nb_places_restantes');
            $table->string('statut'); // par exemple : actif, annulé, complet
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajet');
    }
};
