<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Brand::factory(10)->create();
        \App\Models\SubCategory::factory(30)->create();
        \App\Models\Vendor::factory(10)->create();
        \App\Models\Product::factory(100)->create();
        \App\Models\Slider::factory(10)->create();
        \App\Models\Setting::factory(1)->create();
        \App\Models\Subscribe::factory(10)->create();
        \App\Models\Contact::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
