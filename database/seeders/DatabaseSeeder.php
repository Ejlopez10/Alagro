<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([EmpleadosSeeder::class,]);
        $this->call([FacturasSeeder::class,]);
        $this->call([ProductosSeeder::class,]);
    }
}
