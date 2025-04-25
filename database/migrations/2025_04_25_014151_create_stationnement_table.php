<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationnementTable extends Migration
{
    public function up()
    {
        Schema::create('stationnement', function (Blueprint $table) {
            $table->increments('stat_id');
            $table->unsignedInteger('ville_id');
            $table->enum('type', ['gare', 'port', 'aéroport', 'gare_routière'])->nullable();
            $table->text('description')->nullable();
            
            // Contrainte pour lier stationnement à une ville
            $table->foreign('ville_id')
                  ->references('ville_id')
                  ->on('ville')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('stationnement', function (Blueprint $table) {
            $table->dropForeign(['ville_id']);
        });
        Schema::dropIfExists('stationnement');
    }
}
