<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Models\User::factory()->create([
            'name' => 'Vitaly Konovaluck',
            'email' => 'vkonovaluck@gmail.com',
            //'password' => '$2y$10$CtVe1Fpz3RdJbww1nS4dnenxEn1HV8c7TYyExu07wRe.9qs.wlPq6',
            'password' => '$2y$10$hUV5rOEqt1SvLiDAINYizumA7OKWAu93cYgiKRXyg9WVk7VgOXhs2',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Ulia Konovaluck',
            'email' => 'microcode@i.ua',
            'password' => '$2y$10$hUV5rOEqt1SvLiDAINYizumA7OKWAu93cYgiKRXyg9WVk7VgOXhs2',
        ]);

        \App\Models\User::factory(10)->create();
    }
}
