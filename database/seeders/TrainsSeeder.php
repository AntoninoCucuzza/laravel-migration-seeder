<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 12; $i++) {
            $Train = new Train();
            $Train->Azienda = $faker->company();
            $Train->stazione_di_partenza = $faker->city();
            $Train->Stazione_di_arrivo = $faker->city();
            $Train->Orario_di_partenza = $faker->time('H:i');;
            $Train->Orario_di_arrivo = $faker->time('H:i');;
            $Train->Codice_Treno = $faker->bothify('?????-#####');
            $Train->Numero_Carrozze = $faker->numberBetween(3, 30);
            $Train->In_orario = $faker->boolean();
            $Train->Cancellato = $faker->boolean();
            $Train->save();
        }
    }
}
