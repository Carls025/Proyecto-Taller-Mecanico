<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        // Opcional: limpiar la tabla antes de insertar (evita duplicados)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('servicios')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('servicios')->insert([
            [
                'nombre' => 'Cambio de aceite',
                'descripcion' => 'Reemplazo de aceite y filtro',
                'precio' => 8500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Alineación y balanceo',
                'descripcion' => 'Ajuste de dirección y balanceo en 4 ruedas',
                'precio' => 6500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Revisión general',
                'descripcion' => 'Chequeo completo (frenos, suspensión, luces, fluidos)',
                'precio' => 12000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Frenos (inspección y reemplazo)',
                'descripcion' => 'Inspección y reemplazo de pastillas/discos si es necesario',
                'precio' => 10000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
    




}
