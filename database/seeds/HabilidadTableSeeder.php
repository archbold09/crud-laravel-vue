<?php

use Illuminate\Database\Seeder;

class HabilidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Habilidad::class,30)->create();
    }
}
