<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportTable extends Migration
{
    public function up()
    {
        Schema::create('transport', function (Blueprint $table) {
            $table->increments('transport_id');
            $table->enum('type', ['avion', 'train', 'bus', 'bateau'])->nullable();
            $table->string('compagnie', 100)->nullable();
            $table->integer('capacite')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transport');
    }
}
