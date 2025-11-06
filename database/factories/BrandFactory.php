<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{

    public function definition(): array
    {
        $brand = [
            'Sony',
            'Samsung',
            'Apple',
            'Nike',
            'Adidas',
            'Microsoft',
            'LG',
            'Dell',
            'HP',
            'Lenovo',
        ];
        return [
            'name' => $this->faker->randomElement($brand),
        ];
    }
}
