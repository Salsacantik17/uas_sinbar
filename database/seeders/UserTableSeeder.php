<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat beberapa pengguna acak
       // User::factory(1)->create();
       User::create([
        'name' => 'Admin',
        'username' => 'admin',
        'password' => Hash::make('salsacantik'),
        'email' => 'admin@gmail.com',
        'id_role' => 1,
       ]);

        // Membuat pengguna pengguna
        User::  create([
            'name' => 'Pegawai',
            'username' => 'pegawai',
            'password' => Hash::make('salsacantik'),
            'email' => 'pegawai@gmail.com',
            'id_role' => 2,
        ]);
    }
}
