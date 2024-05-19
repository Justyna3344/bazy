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
        Schema::create('trasy', function (Blueprint $table) {
            $table->id();
            $table->string('Stacja_poczatkowa');
            $table->string('Stacja_koncowa');
            $table->integer('Czas_podrozy');
            $table->integer('Opoznienie')->nullable();
            $table->integer('Trasa_w_km');
            $table->unsignedBigInteger('cala_trasa_id')->nullable();
            $table->foreign('cala_trasa_id')->references('id')->on('cala_trasa');            
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
        Schema::dropIfExists('trasy');
    }
}