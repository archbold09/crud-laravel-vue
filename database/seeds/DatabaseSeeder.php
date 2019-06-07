<?php

use Illuminate\Database\Seeder;
use App\Habilidad;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(HabilidadTableSeeder::class);
    }
}
