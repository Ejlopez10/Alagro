<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'Codigo_Empleado'=>$this->faker->unique()->bothify('???-###'),
             'Nombre'=>$this->faker->name,
             'Apellido'=>$this->faker->lastName,
             'Pais'=>$this->faker->country,
             'Ciudad'=>$this->faker->city,
             'Salario'=>$this->faker->numberBetween(11000,16000)
        ];
    }
}
