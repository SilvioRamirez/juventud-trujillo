<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('reps'))
        {

        }else{
            Schema::create('reps', function (Blueprint $table) {
                $table->increments('id');
                $table->text('cedula')->nullable();
                $table->text('nombres')->nullable();
                $table->text('centro_votacion')->nullable();
                $table->text('edad')->nullable();
                $table->text('parroquia')->nullable();
                $table->text('municipio')->nullable();
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
        //Schema::dropIfExists('reps');
    }
}
