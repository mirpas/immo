<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('flat_type_id'); // FK
            $table->unsignedBigInteger('building_id'); // FK
            $table->string('short_name');
            $table->string('description')->nullable();
            $table->integer('floor');
            $table->integer('no_of_rooms');
            $table->integer('din_area');
            $table->integer('living_area')->nullable();
            $table->integer('heated_area')->nullable();
            $table->integer('useable_area')->nullable;
            $table->integer('balcony_area')->nullable();
            $table->year('year_of_last_renovation')->nullable();
            $table->boolean('built_in_kitchen');
            $table->integer('weg_mieteigentumsanteil')->nullable();
            $table->integer('weg_kopfstimmen')->nullable();
            $table->integer('weg_hausgeld')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('flat_type_id')->references('id')->on('flat_types');
            //$table->foreign('building_id')->references('id')->on('buildings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flats');
    }
}
