<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'logo' => 'logo.png', // You can modify this according to your logic
            'phone' => $this->faker->phoneNumber,
            'whatsapp' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'fb' => $this->faker->url,
            'insta' => $this->faker->url,
            'twt' => $this->faker->url,
            'map' => $this->faker->url,
            'copy' => $this->faker->sentence,
            'yt' => $this->faker->url,
            'az' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
