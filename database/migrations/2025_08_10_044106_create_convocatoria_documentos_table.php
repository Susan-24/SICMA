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
        Schema::create('convocatoria_documentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_convocatoria'); 
            $table->string('tipo'); 
            $table->string('nombre_archivo');
            $table->string('ruta_archivo');
            $table->timestamps();
            $table->foreign('id_convocatoria')->references('id_convocatoria')->on('convocatorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convocatoria_documentos');
    }
};
