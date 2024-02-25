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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('dni', 255)->primary();
            $table->string('nombre', 255);
            $table->string('apellido', 255);
            $table->string('email', 255);
            $table->string('contrasenia', 255);
            $table->enum('tipo', ['alumno', 'docente', 'admin', 'visitante']);
            $table->dateTime('fecha_creacion');
            $table->dateTime('fecha_modificacion');
            $table->unsignedBigInteger('comision_id')->nullable();

            $table->foreign('comision_id')->references('id')->on('comisiones');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
