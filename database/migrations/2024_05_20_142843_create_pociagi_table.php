<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePociagiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pociagi', function (Blueprint $table) {
            $table->bigIncrements('NR_pociagu');
            $table->unsignedBigInteger('Personel_id');
            $table->foreign('Personel_id')->references('id')->on('personel');
            $table->unsignedBigInteger('Lokomotywa_id');
            $table->foreign('Lokomotywa_id')->references('id')->on('lokomotywa');
            $table->unsignedBigInteger('Wagony_id');
            $table->foreign('Wagony_id')->references('id')->on('wagony');
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
        Schema::dropIfExists('pociagi');
    }
}
