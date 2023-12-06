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
        Schema::create('horarios_materia', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_horario');
            $table->unsignedInteger('id_materia');

            $table->foreign('id_horario')->references('id')->on('horarios');
            $table->foreign('id_materia')->references('id')->on('materias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios__materia');
    }
};
