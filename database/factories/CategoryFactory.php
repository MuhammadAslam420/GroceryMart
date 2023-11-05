<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->word;

    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'logo' => 'logo.png', // You can modify this according to your logic
        'created_at' => now(),
        'updated_at' => now(),
    ];
    }
}
