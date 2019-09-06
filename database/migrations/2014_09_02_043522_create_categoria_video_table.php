<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_video', function (Blueprint $table) {
      
            $table->increments('id');          
            $table->string('nombre_categoria');

        });
        DB::table('categoria_video')->insert(['id'=>'1', 'nombre_categoria'=>'Accion']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_video');
    }
}
