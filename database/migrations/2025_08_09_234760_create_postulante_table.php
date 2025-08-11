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
        Schema::create('postulante', function (Blueprint $table) {
            $table->id('id_alumno');
            $table->string('codigo_alumno', 50)->unique();
            $table->string('facultad', 100);
            $table->string('escuela', 100);
            $table->string('semestre', 20);
            $table->integer('orden_merito')->nullable();
            $table->string('ciclo', 20);
            $table->string('direccion', 200)->nullable();
            $table->string('dni', 20)->unique();
            $table->string('num_celular', 20)->nullable();
            $table->string('apellidos', 100);
            $table->string('nombre', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulante');
    }
};
