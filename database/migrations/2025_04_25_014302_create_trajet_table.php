<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetTable extends Migration
{
    public function up()
    {
        Schema::create('trajet', function (Blueprint $table) {
            $table->increments('trajet_id');
            $table->unsignedInteger('stat_id')->nullable();
            $table->unsignedInteger('transport_id')->nullable();
            $table->string('ville_depart', 100)->nullable();
            $table->string('ville_arrivee', 100)->nullable();
            $table->dateTime('date_depart')->nullable();
            $table->dateTime('date_arrivee')->nullable();
            $table->integer('nb_places_total')->nullable();
            $table->integer('nb_places_restantes')->nullable();
            $table->enum('statut', ['prévu', 'en cours', 'annulé', 'retardé'])->default('prévu');
            
            // Clé étrangère vers transport
            $table->foreign('transport_id')
                  ->references('transport_id')
                  ->on('transport');
            // Clé étrangère vers stationnement
            $table->foreign('stat_id')
                  ->references('stat_id')
                  ->on('stationnement');
        });
    }

    public function down()
    {
        Schema::table('trajet', function (Blueprint $table) {
            $table->dropForeign(['transport_id']);
            $table->dropForeign(['stat_id']);
        });
        Schema::dropIfExists('trajet');
    }
}
