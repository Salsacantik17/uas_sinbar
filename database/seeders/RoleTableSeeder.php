<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $roles = [
            'admin', 'pegawai'
        ];

        foreach ($roles as $name) {
            Role::query()->updateOrCreate(['name' => $name]);
        }
    }
}
