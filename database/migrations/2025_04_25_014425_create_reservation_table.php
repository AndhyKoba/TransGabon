<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('reservation_id');
            $table->unsignedInteger('utilisateur_id')->nullable();
            $table->unsignedInteger('trajet_id')->nullable();
            $table->unsignedInteger('stat_id')->nullable();
            $table->timestamp('date_reservation')->useCurrent();
            
            // Clés étrangères
            $table->foreign('utilisateur_id')
                  ->references('utilisateur_id')
                  ->on('utilisateurs');
            $table->foreign('trajet_id')
                  ->references('trajet_id')
                  ->on('trajet');
            $table->foreign('stat_id')
                  ->references('stat_id')
                  ->on('stationnement');
        });
    }

    public function down()
    {
        Schema::table('reservation', function (Blueprint $table) {
            $table->dropForeign(['utilisateur_id']);
            $table->dropForeign(['trajet_id']);
            $table->dropForeign(['stat_id']);
        });
        Schema::dropIfExists('reservation');
    }
}
