<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZnizkiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('znizki', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->string('typ'); // Typ zniżki (np. "ulga", "ulga handlowa")
            $table->float('wartosc_procentowa'); // Wartość zniżki w procentach
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
        Schema::dropIfExists('znizki');
    }
}
