<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(3, true);
        return [
            'vendor_id' => $this->faker->numberBetween(1,10),
            'sub_category_id' => $this->faker->numberBetween(1,30),
            'brand_id' => $this->faker->numberBetween(1,10),
            'name' => $name,
            'slug' => \Illuminate\Support\Str::slug($name),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'sale_price' => $this->faker->randomFloat(2, 5, 90),
            'qty' => $this->faker->numberBetween(0, 100),
            'SKU' => 'S001', // You can modify this as needed
            'image' => 'product.jpg', // You can modify this according to your logic
            'gallery' => null,
            'stock' => $this->faker->randomElement(['instock', 'outofstock']),
            'status' => $this->faker->randomElement(['approved', 'pending']),
            'short_description' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
