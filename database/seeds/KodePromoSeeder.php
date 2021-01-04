<?php

use Illuminate\Database\Seeder;
use App\KodePromo;

class KodePromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kodePromo = KodePromo::create([
            'promo_id' => 1,
            'kode_promo' => 'DANANEWYEAR',
            'kuota' => '100/Hari',
        ]);
    }
}
