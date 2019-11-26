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
            $table->bigIncrements('id');
            $table->string('short_name');
            $table->string('description')->nullable();
            $table->string('street');
            $table->string('zip');
            $table->string('city');
            $table->string('flurnummer')->nullable();
            $table->string('ground_area');
            $table->string('building_area');
            $table->year('year_of_construction')->nullable();
            $table->year('year_of_last_renovation')->nullable();
            $table->string('path_to_energieausweis')->nullable();
            $table->integer('building_type_id'); // FK fuer Gebaeudetyp  $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
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
