<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiletyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilety', function (Blueprint $table) {
            $table->id('idBilety'); // Alternatywnie: $table->bigIncrements('idBilety');
            $table->integer('Cena');
            $table->unsignedBigInteger('Przejazd_idPrzejazd'); // Kolumna dla klucza obcego

            // Definicja klucza obcego
            $table->foreign('Przejazd_idPrzejazd')->references('idPrzejazd')->on('przejazd');

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
        Schema::dropIfExists('bilety');
    }
}
