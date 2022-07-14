<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Codigo_producto'=>$this->faker->unique()->bothify('????-##'),
             'Nombre_producto'=>$this->faker->randomElement(['Cevilat','Fulminado','Torsabet']),
             'Distribuidora'=>$this->faker->randomElement(['Bayer','LaCost','DisFrant']),
             'Precio'=>$this->faker->numberBetween(10,100),
             'Vence'=>$this->faker->dateTimeBetween('now','+4 year')
        ];
    }
}
