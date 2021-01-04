<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //call untuk memangil seeder dibawah saat di run
        $this->call(RoleTableSeeder::class);
        $this->call(CreateAdminSeeder::class);
    }
}
