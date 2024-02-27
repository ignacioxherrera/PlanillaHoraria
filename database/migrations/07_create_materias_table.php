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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('tipo', ['Cuatri 1', 'Cuatri 2', 'Anual']);
            $table->integer('horas_semanales');
            $table->integer('horas_anuales');
            $table->enum('modalidad', ['Taller', 'Materia', 'Proyecto', 'Laboratorio']);
            $table->unsignedBigInteger('id_comision');
            $table->unsignedBigInteger('id_aula');
            $table->unsignedBigInteger('id_horario');
            $table->timestamps();

            $table->foreign('id_comision')->references('id')->on('comisiones');
            $table->foreign('id_aula')->references('id')->on('aulas');
            $table->foreign('id_horario')->references('id')->on('horarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
