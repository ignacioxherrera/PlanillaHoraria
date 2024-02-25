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
        Schema::create('materia_aula', function (Blueprint $table) {
            $table->unsignedBigInteger('materia_id');
            $table->integer('aula_nro');

            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('aula_nro')->references('nro')->on('aulas')->onDelete('cascade'); // Cambiado aula_id a aula_nro

            $table->primary(['materia_id', 'aula_nro']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_aula');
    }
};
