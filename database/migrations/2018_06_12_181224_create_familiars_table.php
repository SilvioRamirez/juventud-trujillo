<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula_persona');
            $table->string('nombres');
            $table->string('cedula');
            $table->string('edad')->nullable();
            $table->string('parentezco');
            $table->string('instruccion');
            $table->string('municipio')->nullable();
            $table->string('parroquia')->nullable();
            $table->text('direccion')->nullable();
            $table->string('centro_votacion');
            $table->string('beneficiario_mision');
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
        Schema::dropIfExists('familiars');
    }
}
