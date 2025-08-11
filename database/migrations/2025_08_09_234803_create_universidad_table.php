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
        Schema::create('universidad', function (Blueprint $table) {
            $table->id('id_universidad');
             $table->unsignedBigInteger('id_naturaleza')->nullable();
              $table->foreign('id_naturaleza')->references('id_naturaleza')->on('naturaleza_universidad')->onDelete('set null');
              $table->unsignedBigInteger('id_ubicacion')->nullable();
              $table->foreign('id_ubicacion')->references('id_ubicacion')->on('ubicacion')->onDelete('set null');
            $table->string('nombre_universidad',150)->nullable();
            $table->string('tipo_universidad',100)->nullable();
            $table->string('codigo_sunedu',50)->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universidad');
    }
};
