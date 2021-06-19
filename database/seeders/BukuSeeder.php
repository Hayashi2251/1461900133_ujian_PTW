<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 25; $i++){
 
            // insert data ke table pegawai menggunakan Faker
            DB::table('lap_buku')->insert([
              'jml_buku' => $faker->numberBetween(10,200),
              'tanggal' => $faker->unique()->dateTime()
          ]);

      }
    }
    
}
