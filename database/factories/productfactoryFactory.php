<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class productfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name(),
            'details' => $this->faker->word(),
            'price' => $this->faker->number(),
            'image' => $this->faker->word(),
            'category_id' => $this->faker->number()
        ];
    }
}
