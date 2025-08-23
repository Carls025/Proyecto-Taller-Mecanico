<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        User::create([
            'name' => 'Admin Taller',
            'email' => 'admin@taller.local',
            'telefono' => '0000-000000',
            'rol' => 'admin',
            'password' => Hash::make('secret123'),
        ]);

        User::factory()->count(10)->create();
    }
}
