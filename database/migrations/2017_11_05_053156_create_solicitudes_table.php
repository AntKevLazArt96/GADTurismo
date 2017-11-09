<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion');
            $table->string('clave');
            $table->string('iepi');
            $table->string('patente');
            $table->string('cuerpoBomberos');
            $table->string('centroSalud');
            $table->string('Zona');
            $table->string('TipoEstablecimiento');
            $table->string('Tipo');
            $table->string('Hoteles');
            $table->string('Habitaciones');
            $table->string('Valor');
            $table->date('fecha');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('estado');
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
        Schema::dropIfExists('solicitudes');
    }
}
