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
        Schema::create('cambios_docente', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_docente_anter');
            $table->unsignedInteger('id_docente_nuevo');
            $table->date('cambio');

            $table->foreign('id_docente_anter')->references('id')->on('docentes');
            $table->foreign('id_docente_nuevo')->references('id')->on('docentes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambios__docente');
    }
};
