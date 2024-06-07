<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('relacje', function (Blueprint $table) {
            $table->bigIncrements('idRelacje');
            $table->string('Nazwa');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('relacje');
    }
};

