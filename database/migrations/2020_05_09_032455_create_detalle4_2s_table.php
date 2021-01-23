<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalle42sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle4_2s', function (Blueprint $table) {
            $table->bigIncrements('idd4_2');
            $table->unsignedBigInteger('idf4_2')->unsigned();
            $table->unsignedBigInteger('id_f')->unsigned();
            $table->integer('hombres');
            $table->integer('mujeres');
            $table->integer('total');
            $table->decimal('porcentaje');
            $table->timestamps();
            $table->foreign('idf4_2')->references('id')->on('
                form_004_2s')->onDelete('cascade');
            $table->foreign('id_f')->references('id_f')->on('facultades')->onDelete('cascade');
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle4_2s');
    }
}
