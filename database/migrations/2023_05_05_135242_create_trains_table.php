<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('azienda',50);

            $table->string('stazione_partenza',100);
            $table->string('stazione_arrivo',100);

            $table->dateTimeTz('orario_partenza');
            $table->dateTimeTz('orario_arrivo');

            $table->integer('codice_treno')->unsigned();
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->boolean('is_orario')->default(1);
            $table->boolean('is_cancellato')->default(0);
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
};
