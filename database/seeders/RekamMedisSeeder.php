<?php

namespace Database\Seeders;

use App\Models\RekamMedis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            RekamMedis::insert(
                [
                'id_pasien' => $i,
                'tanggal_kunjungan' => $faker->date(),
                'dx' => $faker->word(),
                'tx' => $faker->word(),
                'keterangan' => $faker->sentence(),
                ]
            );
        }
    }
}
