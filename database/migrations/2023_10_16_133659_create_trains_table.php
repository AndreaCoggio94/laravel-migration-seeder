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
            // Azienda
            $table->string('company', 50);
            // Stazione di partenza
            $table->string('station_from', 50);
            // Stazione di arrivo
            $table->string('station_to', 50);
            // Orario di partenza
            $table->time('departure', $precision = 0);
            // Orario di arrivo
            $table->time('arrival', $precision = 0);
            // Codice Treno
            $table->string('code', 10);
            // Numero Carrozze
            $table->tinyInteger('number_of_carriage')->unsigned();
            // In orario
            $table->boolean('running_on_time');
            // Cancellato
            $table->boolean('cancelled');

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