<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('personas')){
            Schema::create('personas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nombres');
                $table->string('cedula');
                $table->string('f_nacimiento')->nullable();
                $table->string('edad')->nullable();
                $table->text('direccion')->nullable();
                $table->string('c_comunal')->nullable();
                $table->string('telefono_1')->nullable();
                $table->string('telefono_2')->nullable();
                $table->string('parroquia');
                $table->string('municipio');
                $table->string('centro_votacion');
                $table->string('correo')->nullable();
                $table->string('facebook')->nullable();
                $table->string('instagram')->nullable();
                $table->string('twitter')->nullable();
                $table->string('whatsapp')->nullable();
                $table->string('youtube')->nullable();
                $table->string('snapchat')->nullable();
                $table->string('organizacion')->nullable();
                $table->string('responsabilidad')->nullable();
                $table->string('estructura')->nullable();
                $table->string('vocero_comunal')->nullable();
                $table->string('vocero_comunal_descripcion')->nullable();
                $table->string('beneficiario_mision')->nullable();
                $table->string('beneficiario_mision_descripcion')->nullable();
                $table->string('embarazo')->nullable();
                $table->string('embarazo_semanas')->nullable();
                $table->string('vivienda')->nullable();
                $table->string('vivienda_tipo')->nullable();
                $table->string('deporte')->nullable();
                $table->string('actividad_extra')->nullable();
                $table->string('enfermedad')->nullable();
                $table->string('campismo')->nullable();
                $table->string('cultura')->nullable();
                $table->string('cultura_descripcion')->nullable();
                $table->string('grado_instruccion')->nullable();
                $table->string('liceo_universidad')->nullable();
                $table->string('carrera')->nullable();
                $table->string('trabajo')->nullable();
                $table->string('lugar_trabajo')->nullable();
                $table->string('ingreso_mensual')->nullable();
                $table->string('ocupacion')->nullable();
                $table->string('potencialidad')->nullable();
                $table->string('terreno')->nullable();
                $table->string('terreno_cantidad')->nullable();
                $table->string('terreno_medida')->nullable();
                $table->string('votantes_centro')->nullable();
                $table->string('votantes_centro_descripcion')->nullable();
                $table->string('conoce_centro')->nullable();
                $table->string('conoce_centro_descripcion')->nullable();
                $table->string('responsables_ubch')->nullable();
                $table->string('responsables_ubch_descripcion')->nullable();
                $table->string('entrenamiento_especial')->nullable();
                $table->string('entrenamiento_especial_descripcion')->nullable();
                $table->string('leer')->nullable();
                $table->string('leer_descripcion')->nullable();
                $table->string('conoce_lineas')->nullable();
                $table->string('conoce_estructura')->nullable();
                $table->string('recuerda_intervencion')->nullable();
                $table->string('conoce_lineas_maduro')->nullable();
                $table->string('banco')->nullable();
                $table->string('cuenta')->nullable();
                $table->string('cuenta_tipo')->nullable();
                $table->longtext('imagen')->nullable();
                $table->uuid('uuid')->nullable();
                $table->longtext('qrcode')->nullable();

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('personas');
    }
}
