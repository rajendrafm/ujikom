<?php
use App\alumni;
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
        $alumni= alumni::create(['title'=>'Angkatan 2015','cover'=>'HRI6Tt.png','isi'=>'comntioj']);
         $alumni= alumni::create(['title'=>'Angkatan 2015','cover'=>'HRI6Tt.png','isi'=>'comntioj']);
        
         $alumni= alumni::create(['title'=>'Angkatan 2015','cover'=>'HRI6Tt.png','isi'=>'comntioj']);
        
    }
}
