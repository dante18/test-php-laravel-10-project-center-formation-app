<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'short_description' => fake()->words(20, true),
            'description' => fake()->words(30, true),
            'duration' => rand(30, 300),
            'difficulty' => fake()->words(2, true),
            'publication_date' => fake()->date('Y-m-d'),
            'number_view' => rand(30, 300)
        ];
    }
}
