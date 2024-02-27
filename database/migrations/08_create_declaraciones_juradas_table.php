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
        Schema::create('declaraciones_juradas', function (Blueprint $table) {
            $table->id();
            $table->string('cod_cargo');
            $table->string('cargo');
            $table->string('establecimiento');
            $table->enum('prestacion', ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes']);
            $table->date('posesion');
            $table->enum('turno', ['Alterado', 'Completo', 'Intermedio', 'Matutino', 'Noche', 'Sin Turno', 'Tarde', 'Vespertino']);
            $table->enum('situacion', ['Titular', 'Interino', 'Reemplazante']);
            $table->string('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declaraciones_juradas');
    }
};
