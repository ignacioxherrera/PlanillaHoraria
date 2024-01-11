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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->time('inicio');
            $table->time('fin');
            $table->enum('dia', ['lunes', 'martes', 'miercoles', 'jueves', 'viernes']);
            $table->dateTime('fecha_creacion');
            $table->dateTime('fecha_modificacion');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
