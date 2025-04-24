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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id('reservation_id'); // Clé primaire personnalisée
    
            $table->unsignedBigInteger('utilisateur_id'); // Clé étrangère vers utilisateurs
            $table->unsignedBigInteger('trajet_id');      // Clé étrangère vers trajets
    
            $table->dateTime('date_reservation');
    
            $table->timestamps();
    
            // Déclaration des clés étrangères
            $table->foreign('utilisateur_id')->references('utilisateur_id')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('trajet_id')->references('trajet_id')->on('trajets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
