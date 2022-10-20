<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => '$2y$10$Y51i9984L79onM6yxrxqROLlimRieQindAuyDlF2Pa9vLdPeFpLOm',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Ulia Konovaluck',
            'email' => 'microcode@i.ua',
            'password' => Hash::make('yourpassword'),
        ]);

        \App\Models\User::factory(10)->create();
    }
}
