<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 🔸 Usuario Administrador
        User::updateOrCreate(
            ['email' => 'admin@taller.local'],
            [
                'name' => 'Administrador del Taller',
                'telefono' => '1111111111',
                'rol' => 'admin',
                'password' => Hash::make('admin123'),
            ]
        );

        // 🔹 Usuario Cliente
        User::updateOrCreate(
            ['email' => 'cliente@taller.local'],
            [
                'name' => 'Cliente de Prueba',
                'telefono' => '2222222222',
                'rol' => 'cliente',
                'password' => Hash::make('cliente123'),
            ]
        );
    }
}
