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
        Schema::create('beneficiario', function (Blueprint $table) {
            $table->bigIncrements('id_beneficiario');

    $table->unsignedBigInteger('id_tipo_actividad')->nullable();
    $table->foreign('id_tipo_actividad')->references('id_actividad')->on('tipo_actividad')->onDelete('set null');

    $table->unsignedBigInteger('id_postulante')->nullable();
    $table->foreign('id_postulante')->references('id_alumno')->on('postulante')->onDelete('set null');

    $table->unsignedBigInteger('id_finalidad')->nullable();
    $table->foreign('id_finalidad')->references('id_finalidad')->on('finalidad')->onDelete('set null');

    $table->unsignedBigInteger('id_entidad_subvencionadora')->nullable();
    $table->foreign('id_entidad_subvencionadora')->references('id_entidad_subv')->on('entidad_subvencionadora')->onDelete('set null');

    $table->unsignedBigInteger('id_universidad')->nullable();
    $table->foreign('id_universidad')->references('id_universidad')->on('universidad')->onDelete('set null');

    $table->text('observaciones')->nullable();
    $table->date('fecha_fin')->nullable();
    $table->date('fecha_inicio')->nullable();
    $table->decimal('monto_subvencionado', 12, 2)->nullable();

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiario');
    }
};
