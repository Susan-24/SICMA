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
            $table->id('id_convocatoria');
           $table->foreignId('id_usuario')->constrained('users')->onDelete('cascade');
           $table->unsignedBigInteger('id_postulante')->nullable();
           $table->foreign('id_postulante')->references('id_alumno')->on('postulante')->onDelete('set null');
           $table->unsignedBigInteger('id_tipo_actividad')->nullable();
           $table->foreign('id_tipo_actividad')->references('id_actividad')->on('tipo_actividad')->onDelete('set null');
           $table->date('fecha_inicio')->nullable();
           $table->date('fecha_fin')->nullable();
           $table->text('bases')->nullable();
           $table->string('estado', 20)->nullable();
           $table->string('resolucion', 100)->nullable();
           $table->string('nombre', 150);
           $table->timestamps();
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