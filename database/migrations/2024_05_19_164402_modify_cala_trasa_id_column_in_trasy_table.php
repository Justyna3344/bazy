<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCalaTrasaIdColumnInTrasyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trasy', function (Blueprint $table) {
            // Zmień typ kolumny
            $table->unsignedBigInteger('cala_trasa_id')->change();

            // Sprawdź, czy klucz obcy istnieje, zanim zostanie dodany
            if (!Schema::hasColumn('trasy', 'cala_trasa_id')) {
                $table->foreign('cala_trasa_id')->references('id')->on('cala_trasa')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trasy', function (Blueprint $table) {
            // Zmień z powrotem typ kolumny
            $table->integer('cala_trasa_id')->change();
            
            // Usuń klucz obcy, jeśli istnieje
            if (Schema::hasColumn('trasy', 'cala_trasa_id')) {
                $table->dropForeign(['cala_trasa_id']);
            }
        });
    }
}
