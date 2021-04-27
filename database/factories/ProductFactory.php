<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'category' => $this->faker->word(),
            'manufacturer' =>  $this->faker->word(),
            'price' => $this->faker->randomDigit(),
            'image' => $this->faker->imageUrl($width = 800, $height = 600, 'products'),
            'slug' => 'prova',
            
        ];
    }
}
