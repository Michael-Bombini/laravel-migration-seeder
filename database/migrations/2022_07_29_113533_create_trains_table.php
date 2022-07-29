<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->String('nome_azienda',50);
            $table->String('stazione_partenza',70);
            $table->String('stazione_arrivo' , 70);
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->unsignedSmallInteger('codice_treno');
            $table->unsignedTinyInteger('num_carrozze');
            $table->boolean('in_orario');
            $table->boolean('is_cancellato');
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
        Schema::dropIfExists('trains');
    }
}
