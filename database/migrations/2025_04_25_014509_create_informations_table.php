<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->increments('info_id');
            $table->unsignedInteger('utilisateur_id')->nullable();
            $table->unsignedInteger('trajet_id')->nullable();
            $table->timestamp('date')->useCurrent();
            
            // Clés étrangères
            $table->foreign('utilisateur_id')
                  ->references('utilisateur_id')
                  ->on('utilisateurs');
            // Clé étrangère vers l'administrateur
            $table->foreign('trajet_id')
                  ->references('trajet_id')
                  ->on('trajet');
        });
    }

    public function down()
    {
        Schema::table('informations', function (Blueprint $table) {
            $table->dropForeign(['utilisateur_id']);
            $table->dropForeign(['trajet_id']);
        });
        Schema::dropIfExists('informations');
    }
}
