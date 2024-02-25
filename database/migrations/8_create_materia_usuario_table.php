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
        Schema::create('materia_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('materia_id');
            $table->string('usuario_dni');

            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('usuario_dni')->references('dni')->on('usuarios')->onDelete('cascade');

            $table->primary(['materia_id', 'usuario_dni']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_usuario');
    }
};
