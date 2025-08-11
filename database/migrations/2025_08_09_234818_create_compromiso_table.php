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
        Schema::create('compromiso', function (Blueprint $table) {
            $table->bigIncrements('id_compromiso');

    $table->unsignedBigInteger('id_convenio');
    $table->foreign('id_convenio')->references('id_convenio')->on('convenios')->onDelete('cascade');

    $table->text('descripcion')->nullable();
    $table->text('observaciones')->nullable();

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compromiso');
    }
};
