<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            Pasien::insert(
                [
                    'nama' => $faker->name(),
                    'tanggal_lahir' => $faker->date(),
                    'NIK' => $faker->unique()->numerify('##########'),
                    'alamat' => $faker->address(),
                ]
            );
        }
    }
}
