<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            "name" => "Renan Piovesani",
            "email" => "renan@renan.com",
            "password" => Hash::make("123"),
        ]);

        DB::table('adresses')->insert([
            "address" => "Rua dos bobos, num 123"
        ]);

        DB::table('invoices')->insert([
            "description" => "Lorem ipsum",
            "value" => 0.00
        ]);
    }
}
