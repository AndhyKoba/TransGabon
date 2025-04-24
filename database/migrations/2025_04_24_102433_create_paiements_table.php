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
        Schema::create('paiement', function (Blueprint $table) {
            $table->id('paiement_id'); // Clé primaire personnalisée
    
            $table->unsignedBigInteger('reservation_id'); // Clé étrangère vers reservations
    
            $table->dateTime('date_paiement');
            $table->string('methode_paiement'); // Exemple : carte, espèce, PayPal...
    
            $table->timestamps();
    
            // Clé étrangère
            $table->foreign('reservation_id')->references('reservation_id')->on('reservations')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
