<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos_comision', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_alumno');
            $table->unsignedInteger('id_comision');
            $table->foreign('id_alumno')->references('id')->on('alumnos');
            $table->foreign('id_comision')->references('id')->on('comisiones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos__comision');
    }
};
