<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Factura::factory(1000)->create();
    }
}
