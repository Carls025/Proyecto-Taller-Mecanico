<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Automovil;
use App\Models\Servicio;
use App\Models\Turno;

class TurnoSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('turnos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $automoviles = Automovil::all();
        $servicios = Servicio::all();

        if ($automoviles->isEmpty() || $servicios->isEmpty()) {
            $this->command->error('No hay automóviles o servicios. Ejecuta primero UserSeeder, ServicioSeeder y AutomovilSeeder.');
            return;
        }

        foreach ($automoviles as $auto) {
            Turno::factory()->count(rand(1, 4))->create([
                'automovil_id' => $auto->id,
                'servicio_id' => $servicios->random()->id,
            ]);
        }
    }
}
