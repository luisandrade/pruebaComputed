<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_playlist', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_video')->unsigned();
            $table->foreign('id_video')->references('id')->on('video');

            $table->integer('id_playlist')->unsigned();
            $table->foreign('id_playlist')->references('id')->on('playlist');

            $table->integer('length_total');

            
           

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
        Schema::dropIfExists('detalle_video');
    }
}
