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
        Schema::create('informations', function (Blueprint $table) {
            $table->id('info_id'); // Clé primaire
    
            $table->unsignedBigInteger('admin_id');         // Clé étrangère vers admins
            $table->unsignedBigInteger('utilisateur_id');   // Clé étrangère vers utilisateurs
            $table->unsignedBigInteger('trajet_id');        // Clé étrangère vers trajets
    
            $table->string('titre');
            $table->text('message');
            $table->dateTime('date_envoi');
    
            $table->timestamps();
    
            // Déclaration des clés étrangères
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('utilisateur_id')->references('utilisateur_id')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('trajet_id')->references('trajet_id')->on('trajets')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};
