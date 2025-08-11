<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ModalidadSeeder extends Seeder
{
    public function run(): void
    {
     
        Schema::disableForeignKeyConstraints();

        
        DB::table('modalidad')->truncate();

       
        Schema::enableForeignKeyConstraints();

      
        DB::table('modalidad')->insert([
            [
                'nombre_modalidad' => 'Nacional',
                'descripcion' => 'Movilidad académica dentro del país',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_modalidad' => 'Internacional',
                'descripcion' => 'Movilidad académica fuera del país',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
