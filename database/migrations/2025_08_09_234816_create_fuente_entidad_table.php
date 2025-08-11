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
        Schema::create('fuente_entidad', function (Blueprint $table) {
            $table->id('id_fuente_entidad');
            $table->foreignId('id_entidad_subv')->constrained('entidad_subvencionadora', 'id_entidad_subv')->onDelete('cascade');
            $table->foreignId('id_tipo_fuente')->constrained('tipo_fuente', 'id_tipo_fuente')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuente_entidad');
    }
};
