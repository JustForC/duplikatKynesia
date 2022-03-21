<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => "User Satu",
            'email' => "usersatu@gmail.com",
            'password' => Hash::make('masukdong'),
            'role' => 0,
            'statusOne' => "Proses Pendaftaran",
        ]);
    }
}
