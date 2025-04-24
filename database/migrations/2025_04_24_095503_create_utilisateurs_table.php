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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('utilisateur_id'); // clé primaire personnalisée
            $table->string('nom');
            $table->string('pseudo');
            $table->string('prenom');
            $table->string('email')->unique(); // chaque email doit être unique
            $table->string('mot_de_passe');    // mot de passe hashé
            $table->string('role');            // exemple : admin, client, agent
            $table->timestamps();              // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
