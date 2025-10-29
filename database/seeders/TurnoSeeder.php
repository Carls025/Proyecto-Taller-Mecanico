<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Automovil;
use App\Models\Servicio;
use App\Models\Turno;
use App\Models\User;

class TurnoSeeder extends Seeder
{
    public function run(): void
    {
        // Limpieza de la tabla
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('turnos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $automoviles = Automovil::all();
        $servicios = Servicio::all();
        $usuarios   = User::all(); // 👈 agregamos usuarios

        if ($automoviles->isEmpty() || $servicios->isEmpty() || $usuarios->isEmpty()) {
            $this->command->error('Faltan datos. Ejecuta primero UserSeeder, ServicioSeeder y AutomovilSeeder.');
            return;
        }

        foreach ($automoviles as $auto) {
            Turno::factory()->count(rand(1, 4))->create([
                'automovil_id' => $auto->id,
                'servicio_id'  => $servicios->random()->id,
                'user_id'      => $usuarios->random()->id, // 👈 ahora asignamos un cliente
            ]);
        }
    }
}
