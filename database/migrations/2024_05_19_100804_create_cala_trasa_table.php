<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalaTrasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cala_trasa', function (Blueprint $table) {
            $table->id();
            $table->string('Czas_podrozy');
            $table->string('Trasy');
            $table->integer('Trasa_w_km');
            $table->string('Modyfikacja_trasy');
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
        Schema::dropIfExists('cala_trasa');
    }
}
