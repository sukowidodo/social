<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            "subject" => fake()->words(5,true),
            "message" => fake()->paragraph,
            "sender_id" => rand(1,30),
            "recepient_id" => rand(1,30)
        ];
    }
}
