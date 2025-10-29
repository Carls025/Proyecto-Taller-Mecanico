<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Otros seeders que quieras ejecutar primero
        $this->call([
        ServicioSeeder::class,
        UserSeeder::class,
        // AutomovilSeeder::class,
        // TurnoSeeder::class,
        ]);
    

     
        $this->call([
        UserSeeder::class,
        ServicioSeeder::class,
        AutomovilSeeder::class,
        TurnoSeeder::class,
    ]);
}

}
