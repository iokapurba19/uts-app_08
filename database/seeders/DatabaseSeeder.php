<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
            DB::table('users')->insert([
            'username' => 'ioka',
            'email' => 'ioka@gmail.com',
            'password' => Hash::make('ioka'),
        ]);
    }
}
