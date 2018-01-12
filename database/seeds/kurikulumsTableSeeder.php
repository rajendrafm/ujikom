<?php
use App\kurikulum;
use Illuminate\Database\Seeder;

class kurikulumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kurikulum= kurikulum::create(['cover'=>'Phyjti.jpg','nama'=>'dsa','jabatan'=>'comntioj']);
        $kurikulum= kurikulum::create(['cover'=>'Phyjti.jpg','nama'=>'dsa','jabatan'=>'comntioj']);
        $kurikulum= kurikulum::create(['cover'=>'Phyjti.jpg','nama'=>'dsa','jabatan'=>'comntioj']);
    }
}
