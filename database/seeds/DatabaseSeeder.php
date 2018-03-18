<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$this->call(alumnisTableSeeder::class);
$this->call(beritasTableSeeder::class);
$this->call(kurikulumsTableSeeder::class);
$this->call(prestasisTableSeeder::class);
    }
}
