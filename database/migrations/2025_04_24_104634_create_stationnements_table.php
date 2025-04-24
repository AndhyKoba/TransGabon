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
        Schema::create('stationnement', function (Blueprint $table) {
            $table->id('stat_id');           // Clé primaire personnalisée
            $table->string('type');          // Type de stationnement
            $table->text('description');     // Description
            $table->timestamps();            // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stationnements');
    }
};
