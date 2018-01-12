<?php
use App\prestasi;
use Illuminate\Database\Seeder;

class prestasisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prestasi= prestasi::create(['title'=>'Phyj','cover'=>'KzUtBm.jpg','isi'=>'comntisoj']);
        $prestasi= prestasi::create(['title'=>'Phyj','cover'=>'KzUtBm.jpg','isi'=>'comntisoj']);
        $prestasi= prestasi::create(['title'=>'Phyj','cover'=>'KzUtBm.jpg','isi'=>'comntisoj']);

    }
}
