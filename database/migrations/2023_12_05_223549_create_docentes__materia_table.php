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
        Schema::create('docentes_materia', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_docente');
            $table->unsignedInteger('id_materia');

            $table->foreign('id_docente')->references('id')->on('docentes');
            $table->foreign('id_materia')->references('id')->on('materias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes__materia');
    }
};
