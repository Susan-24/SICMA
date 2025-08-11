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
       Schema::create('tipo_actividad', function (Blueprint $table) {
            $table->id('id_actividad');
            $table->unsignedBigInteger('id_modalidad');
            $table->foreign('id_modalidad')->references('id_modalidad')->on('modalidad')->onDelete('cascade');
            $table->text('descripcion')->nullable();
           $table->string('nombre_actividad', 100);
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_actividad');
    }
};
