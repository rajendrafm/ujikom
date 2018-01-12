<?php
use App\contact;
use Illuminate\Database\Seeder;

class contactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact= contact::create(['nama'=>'Angkatan 2015','email'=>'sv6y1a','no'=>'comntioj','isi'=>'comntioj']);
         $contact= contact::create(['nama'=>'Angkatan 2015','email'=>'sv6y1a','no'=>'comntioj','isi'=>'comntioj']);
          $contact= contact::create(['nama'=>'Angkatan 2015','email'=>'sv6y1a','no'=>'comntioj','isi'=>'comntioj']);
    }
}
