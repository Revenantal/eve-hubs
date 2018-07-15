<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolarSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solar_systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('system_id');
            $table->string('name');
            $table->integer('region_id');
            $table->double('security');
            $table->integer('jita')->default(0);
            $table->integer('amarr')->default(0);
            $table->integer('hek')->default(0);
            $table->integer('dodixie')->default(0);
            $table->integer('rens')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solar_systems');
    }
}

