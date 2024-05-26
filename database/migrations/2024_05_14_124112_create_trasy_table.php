<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trasy', function (Blueprint $table) { // Zmiana na 'Trasy' z dużej litery
            $table->id();
            $table->string('Stacja_poczatkowa');
            $table->string('Stacja_koncowa');
            $table->integer('Czas_podrozy');
            $table->integer('Opoznienie')->nullable()->default(0); // Domyślna wartość 0
            $table->integer('Trasa_w_km');
            $table->foreignId('cala_trasa_id')->constrained('cala_trasa')->onDelete('cascade');
            $table->time('Godzina_przyjazdu');
            $table->time('Godzina_odjazdu');
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
        Schema::dropIfExists('Trasy'); // Zmiana na 'Trasy' z dużej litery
    }
}
