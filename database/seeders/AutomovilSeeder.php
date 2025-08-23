<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Automovil;

class AutomovilSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('automoviles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Buscar todos los clientes
        $clientes = User::where('rol', 'cliente')->get();

        // Si no hay clientes, crear algunos
        if ($clientes->isEmpty()) {
            User::factory()->count(5)->create(['rol' => 'cliente']);
            $clientes = User::where('rol', 'cliente')->get();
        }

        // Crear autos para cada cliente
        foreach ($clientes as $cliente) {
            Automovil::factory()->count(rand(1, 3))->create([
                'user_id' => $cliente->id,
            ]);
        }
    }
}
