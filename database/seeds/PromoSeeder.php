<?php

use Illuminate\Database\Seeder;
use App\Promo;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promo = Promo::create([
            'nama_promo' => 'DANA NEW YEAR FESTIVAL',
            'deskripsi_promo' => '....',
            'gambar_promo' => 'promo1.png',
            'datatarget_promo' => '1',
            'snk_promo' => 'Setiap Pengguna hanya bisa menggunakan 1x/periode'
        ]);
    }
}
