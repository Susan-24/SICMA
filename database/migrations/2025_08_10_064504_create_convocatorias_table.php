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
        Schema::create('convocatorias', function (Blueprint $table) {
            Schema::create('convocatorias', function (Blueprint $table) {
    $table->id('id_convocatoria');
    $table->unsignedBigInteger('id_usuario');
    $table->unsignedBigInteger('id_postulante')->nullable();
    $table->unsignedBigInteger('id_tipo_actividad')->nullable();
    $table->date('fecha_inicio')->nullable();
    $table->date('fecha_fin')->nullable();
    $table->text('bases')->nullable();
    $table->string('estado', 20)->nullable();
    $table->string('resolucion', 100)->nullable();
    $table->string('nombre', 150);
    $table->timestamps();
});

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convocatorias');
    }
};
