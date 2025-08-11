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
        Schema::create('postulacion', function (Blueprint $table) {
                $table->bigIncrements('id_postulacion');
                $table->unsignedBigInteger('id_postulante');
                 $table->foreign('id_postulante')->references('id_alumno')->on('postulante')->onDelete('cascade');
                 $table->unsignedBigInteger('id_convocatoria');
                 $table->foreign('id_convocatoria')->references('id_convocatoria')->on('convocatorias')->onDelete('cascade');
                 $table->unsignedBigInteger('id_tipo_actividad');
                 $table->foreign('id_tipo_actividad')->references('id_actividad')->on('tipo_actividad')->onDelete('cascade');
                 $table->date('fecha_postulacion')->nullable();
                 $table->string('estado', 20)->nullable();
                 $table->text('observaciones')->nullable();
                 $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulacion');
    }
};