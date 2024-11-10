<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $user = [
        [
            'name' => 'Kasir',
            'email' => 'kasir@example.com',
            'username' => 'kasir',
            'password' => Hash::make('kasir'),
            'level' => 'kasir'
        ],
        [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'level' => 'admin'
        ]
    ];

    foreach ($user as $idx => $data) {
        User::factory()->create($data);
    }
}
}
