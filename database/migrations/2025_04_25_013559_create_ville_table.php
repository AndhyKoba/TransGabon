<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVilleTable extends Migration
{
    public function up()
    {
        Schema::create('ville', function (Blueprint $table) {
            $table->increments('ville_id');
            $table->string('nom', 100);
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ville');
    }
}
