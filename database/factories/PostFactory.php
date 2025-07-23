<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(), //read laravel faker doucmentation
            // 'name' => Str::random(10000)
            'email' => $this->faker->safeEmail(), //import*
            'phone' => '09'.rand(100000,999999),
            'location' => $this->faker->address()
        ];
    }
}
