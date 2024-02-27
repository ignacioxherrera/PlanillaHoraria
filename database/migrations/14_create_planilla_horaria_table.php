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
        Schema::create('planilla_horaria', function (Blueprint $table) {
            $table->id();
            $table->enum('semana', ['Semana 1', 'Semana 2']);
            $table->enum('tipo_clase', ['Virtual', 'Presencial']);
            $table->unsignedBigInteger('id_horario');
            $table->unsignedBigInteger('id_materia');
            $table->unsignedBigInteger('id_comision');
            $table->string('dni_docente');
            $table->unsignedBigInteger('id_aula');
            $table->timestamps();

            $table->foreign('id_horario')->references('id')->on('horarios');
            $table->foreign('id_materia')->references('id')->on('materias');
            $table->foreign('id_comision')->references('id')->on('comisiones');
            $table->foreign('dni_docente')->references('dni')->on('docentes');
            $table->foreign('id_aula')->references('id')->on('aulas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planilla_horaria');
    }
};
