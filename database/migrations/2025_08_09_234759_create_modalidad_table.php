<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('modalidad')) {
            Schema::create('modalidad', function (Blueprint $table) {
                $table->bigIncrements('id_modalidad');
                $table->string('nombre_modalidad', 100);
                $table->text('descripcion')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('modalidad');
    }
};
