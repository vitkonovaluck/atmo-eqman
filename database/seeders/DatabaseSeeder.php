<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

         \App\Models\User::factory()->create([
             'name' => 'Vitaly Konovaluck',
             'email' => 'vkonovaluck@gmail.com',
             'password' => '$2y$10$CtVe1Fpz3RdJbww1nS4dnenxEn1HV8c7TYyExu07wRe.9qs.wlPq6',
         ]);
    }
}
