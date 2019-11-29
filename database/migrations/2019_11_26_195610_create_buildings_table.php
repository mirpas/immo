<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->bigIncrements('id'); // PK
            $table->unsignedBigInteger('building_type_id'); // FK
            $table->string('short_name');
            $table->string('description')->nullable();
            $table->string('street');
            $table->string('zip');
            $table->string('city');
            $table->string('flurnummer')->nullable();
            $table->integer('no_of_floors')->nullable();
            $table->integer('din_area');
            $table->integer('heated_area');
            $table->integer('useable_area')->nullable;
            $table->integer('ground_area')->nullable();
            $table->year('year_of_construction')->nullable();
            $table->year('year_of_last_renovation')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('building_type_id')->references('id')->on('building_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
}
