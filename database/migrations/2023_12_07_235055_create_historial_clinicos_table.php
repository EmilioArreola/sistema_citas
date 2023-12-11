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
        Schema::create('historial_clinicos', function (Blueprint $table) {
            $table->id('idHistorial');
            $table->date('fechaUltimaVisita');
            $table->text('diagnosticoAnterior');
            $table->text('cirujiaPrevia');
            $table->text('condicionCronica');
            $table->text('alergia');
            $table->text('tratamiento');
            $table->text('vacuna');
            $table->date('fechaDesparatizacion');
            $table->foreignId('mascotaId')->constrained('mascotas', 'idMascota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_clinicos');
    }
};
