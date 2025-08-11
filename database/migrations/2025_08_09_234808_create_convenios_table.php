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
        Schema::create('convenios', function (Blueprint $table) {
            $table->bigIncrements('id_convenio');
            $table->unsignedBigInteger('id_entidad_convenio');
            $table->foreign('id_entidad_convenio')->references('id_entidad_convenio')->on('entidad_convenio')->onDelete('cascade');
            $table->unsignedBigInteger('id_tipo_convenio');
            $table->foreign('id_tipo_convenio')->references('id_tipo_convenio')->on('tipo_convenio')->onDelete('cascade');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('resolucion_aprobacion', 100)->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('responsable', 150)->nullable();
            $table->text('objetivo')->nullable();
            $table->string('coordinador', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convenios');
    }
};
