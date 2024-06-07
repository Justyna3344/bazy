<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiletyTable extends Migration
{
    public function up()
    {
        Schema::create('bilety', function (Blueprint $table) {
            $table->id('idBilety');
            $table->decimal('Cena', 8, 2);
            $table->unsignedBigInteger('Przejazd_idPrzejazd');
            $table->unsignedBigInteger('user_id');
           
            $table->timestamps();

            $table->foreign('Przejazd_idPrzejazd')->references('id')->on('przejazdy')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
