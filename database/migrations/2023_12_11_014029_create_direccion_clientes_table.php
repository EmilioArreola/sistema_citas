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
        Schema::create('direccion_clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('direccionId')->constrained('direcciones', 'idDireccion');
            $table->foreignId('clienteId')->constrained('clientes', 'idCliente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccion_clientes');
    }
};
