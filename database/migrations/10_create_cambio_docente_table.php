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
        Schema::create('cambio_docente', function (Blueprint $table) {
            $table->id();
            $table->string('docente_pedido');
            $table->string('docente_cambia');
            $table->timestamps();

            $table->foreign('docente_pedido')->references('dni')->on('docentes');
            $table->foreign('docente_cambia')->references('dni')->on('docentes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambio_docente');
    }
};
