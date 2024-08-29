<?php

namespace Database\Seeders;

use App\Models\Rekam_medis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Rekam_medisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            Rekam_medis::insert(
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
