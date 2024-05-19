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
        Schema::create('personel', function (Blueprint $table) {
            $table->id();
            $table->string('Rola');
            $table->string('Imie');
            $table->string('Nazwisko');
            $table->string('Email');
            $table->integer('NR_telefonu');
            $table->string('Miasto');
            $table->string('Ulica');
            $table->integer('NR_domu');
            $table->integer('Pesel');
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
        Schema::dropIfExists('personel');
    }
};
