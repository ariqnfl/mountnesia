<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMountOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mount_order', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mount_id');
            $table->unsignedInteger('order_id');
            $table->timestamps();
            $table->foreign('mount_id')->references('id')->on('mounts');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mount_order');
    }
}
