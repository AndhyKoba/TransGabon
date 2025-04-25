<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('utilisateur_id');
            $table->string('pseudo', 50)->nullable();
            $table->string('nom', 50)->nullable();
            $table->string('prenom', 50)->nullable();
            $table->string('email', 100)->nullable()->unique();
            $table->string('mot_de_passe', 255)->nullable();
            $table->enum('role', ['client', 'agent', 'admin'])->default('client');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
