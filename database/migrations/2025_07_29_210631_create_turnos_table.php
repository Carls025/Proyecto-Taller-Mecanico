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
        Schema::create('turnos', function (Blueprint $table) {
        $table->id();
        $table->date('fecha');
        $table->time('hora');
        $table->enum('estado', ['pendiente', 'confirmado', 'cancelado', 'completado'])->default('pendiente');
        $table->foreignId('automovil_id')->constrained('automoviles')->onDelete('cascade');
        $table->foreignId('servicio_id')->constrained('servicios')->onDelete('restrict');
        $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
