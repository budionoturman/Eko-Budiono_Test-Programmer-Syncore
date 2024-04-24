<?php

namespace Database\Seeders;

use App\Models\Biodata;
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
        // User::factory(10)->create();

        User::create([
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin'
        ]);

        Biodata::create([
            'user_id' => 1,
            'nama' => 'admin 1',
            'tgl_lahir' => date('Y-m-d H:i:s'),
            'alamat' => 'cilacap'
        ]);

        User::create([
            'email' => 'eko@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'member'
        ]);

        Biodata::create([
            'user_id' => 2,
            'nama' => 'Eko',
            'tgl_lahir' => date('Y-m-d H:i:s'),
            'alamat' => 'cilacap',
            'posisi_dilamar' => 'programmer'
        ]);
    }
}
