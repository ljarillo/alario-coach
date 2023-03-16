<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create([
             'name' => 'Leonardo Alario',
             'email' => 'alario@alario.com',
             'email_verified_at' => now(),
             'password' => bcrypt('12345678'), // password
             'remember_token' => Str::random(10),
         ]);

         $this->call([
             PatientSeeder::class,
             PlanSeeder::class
         ]);
    }
}
