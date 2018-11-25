<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Location::create([
           "name" => "Jawa Barat"
        ]);
        \App\Location::create([
            "name" => "Jawa Timur"
        ]);
        \App\Location::create([
            "name" => "Jawa Tengah"
        ]);
        \App\Location::create([
            "name" => "Daerah Istimewa Yogyakarta"
        ]);

    }
}
