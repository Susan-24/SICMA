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
        Schema::create('requisitos', function (Blueprint $table) {
            $table->id('id_requisito');
            $table->string('nombre_requisito', 150)->nullable();
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('id_convocatoria');
            $table->foreign('id_convocatoria')->references('id_convocatoria')->on('convocatorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitos');
    }
};
