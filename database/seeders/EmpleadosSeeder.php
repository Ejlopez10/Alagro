<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;


class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Empleado::factory(1000)->create();
    }
}
