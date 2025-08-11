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
        Schema::create('postulacion_requisito', function (Blueprint $table) {
            $table->id('id_postulacion_requisito');
            $table->foreignId('id_postulacion')->constrained('postulacion', 'id_postulacion')->onDelete('cascade');
            $table->foreignId('id_requisito')->constrained('requisitos', 'id_requisito')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulacion_requisito');
    }
};
