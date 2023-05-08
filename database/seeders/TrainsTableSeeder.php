<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 20; $i++) {
            $new_train = new Train();
            $new_train->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'Trenord', 'SNCF', 'SBB']);
            $new_train->stazione_partenza = $faker->city();
            $new_train->stazione_arrivo = $faker->city();
            $new_train->orario_partenza = $faker->date();
            $new_train->orario_arrivo = $faker->date();
            $new_train->codice_treno = $faker->numberBetween(100, 900);
            $new_train->numero_carrozze = $faker->numberBetween(1, 20);
            $new_train->is_orario = $faker->numberBetween(0, 1);
            $new_train->is_cancellato = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
