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
        Schema::create('docentes', function (Blueprint $table) {
            $table->string('dni')->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('contrasenia');
            $table->integer('horas_catedras_externas');
            $table->integer('horas_catedras_locales');
            $table->unsignedBigInteger('id_declaracionJ')->nullable();
            $table->foreign('id_declaracionJ')->references('id')->on('declaraciones_juradas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
