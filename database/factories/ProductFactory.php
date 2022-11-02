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
    public function definition()
    {
        return [

            'name'              => $this->faker->words(4,true),
            'description'       => $this->faker->sentence(),
            'price'             => $this->faker->randomFloat(2,1, 10000),
            'cover_img'         => $this->faker->imageUrl(800, 600, 'computers'),
        ];
    }
}
