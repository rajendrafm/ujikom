<?php
use App\berita;
use Illuminate\Database\Seeder;

class beritasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $berita= berita::create(['title'=>'Angkatan 2015','cover'=>'sv6y1a.JPG','isi'=>'comntioj']);
         $berita= berita::create(['title'=>'Angkatan 2015','cover'=>'sv6y1a.JPG','isi'=>'comntioj']);
          $berita= berita::create(['title'=>'Angkatan 2015','cover'=>'sv6y1a.JPG','isi'=>'comntioj']);
    }
}
