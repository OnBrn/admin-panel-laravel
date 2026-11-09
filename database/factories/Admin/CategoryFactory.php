<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'CategoryName' => fake()->unique()->words(2, true),
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
        ];
    }
}
