<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Message;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'from' => User::pluck('id')->random(),
            'to' => User::pluck('id')->random(),
            'title' => fake()->name(),
            'text' => fake()->paragraph(10),
            'read' => rand(0, 1),


        ];
    }
}
