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
        Schema::create('historiales', function (Blueprint $table) {
            $table->id();
            $table->string('dni_docente');
            $table->unsignedBigInteger('ultimo_cargo_materia');
            $table->timestamps();

            $table->foreign('dni_docente')->references('dni')->on('docentes');
            $table->foreign('ultimo_cargo_materia')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiales');
    }
};
