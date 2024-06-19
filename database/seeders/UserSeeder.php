<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'id' => 1,
                'name' => "admin",
                'email' => "admin@gmail.com",
                'username' => "admin",
                'role' => 'admin',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 2,
                'name' => "pasien",
                'email' => "pasien@gmail.com",
                'username' => "pasien",
                'role' => 'pasien',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 3,
                'name' => "dokter 1",
                'email' => "dokter@gmail.com",
                'username' => "dokter",
                'role' => 'dokter',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 4,
                'name' => "dokter 2",
                'email' => "dokter2@gmail.com",
                'username' => "dokter2",
                'role' => 'dokter',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 5,
                'name' => "dokter 3",
                'email' => "dokter3@gmail.com",
                'username' => "dokter3",
                'role' => 'dokter',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 6,
                'name' => "dokter 4",
                'email' => "dokter4@gmail.com",
                'username' => "dokter4",
                'role' => 'dokter',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 7,
                'name' => "pasien 2",
                'email' => "pasien2@gmail.com",
                'username' => "pasien2",
                'role' => 'pasien',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
    
}
