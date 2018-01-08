<?php

use Illuminate\Database\Seeder;

class alumnisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumni= alumni::create(['title'=>'Angkatan 2015','isi'=>'ALUMNI','alumni_id'=>$alumni1->id]);
        
    }
}
