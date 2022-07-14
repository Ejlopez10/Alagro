<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'Codigo_Factura'=>$this->faker->unique()->bothify('???_###'),
            'Nombre_cliente'=>$this->faker->name,
             'Producto'=>$this->faker->randomElement(['Urea','Sulfato','Bomba Mochila','Botas','Machetes']),
             'Precio'=>$this->faker->numberBetween(20,100),
             'Fecha_Venta'=>$this->faker->dateTimeBetween('now','+5 year'),
             'Total_pago'=>$this->faker->numberBetween(100,2000)
        ];
    }
}
