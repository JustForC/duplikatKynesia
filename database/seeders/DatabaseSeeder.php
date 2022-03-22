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

        // Buat Testing Admin
        User::create([
            'name' => "User Dua",
            'email' => "userdua@gmail.com",
            'password' => Hash::make('masukdong'),
            'role' => 0,
            'statusOne' => "Proses Seleksi",
        ]);
        User::create([
            'name' => "User Tiga",
            'email' => "usertiga@gmail.com",
            'password' => Hash::make('masukdong'),
            'role' => 0,
            'statusOne' => "Proses Seleksi",
        ]);
        User::create([
            'name' => "User Empat",
            'email' => "userempat@gmail.com",
            'password' => Hash::make('masukdong'),
            'role' => 0,
            'statusOne' => "Proses Seleksi",
        ]);
        User::create([
            'name' => "User Lima",
            'email' => "userlima@gmail.com",
            'password' => Hash::make('masukdong'),
            'role' => 0,
            'statusOne' => "Proses Seleksi",
        ]);
        User::create([
            'name' => "User Enam",
            'email' => "userenam@gmail.com",
            'password' => Hash::make('masukdong'),
            'role' => 0,
            'statusOne' => "Proses Seleksi",
        ]);
        // End Buat Testing

        User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('masukdong'),
            'role' => 1,
        ]);
    }
}
