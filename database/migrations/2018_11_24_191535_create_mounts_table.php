<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('height');
            $table->text('terms');
            $table->text('desc');
            $table->unsignedInteger('location_id');
            $table->integer('price');
            $table->string('imageCover')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->timestamps();
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mounts');
    }
}
