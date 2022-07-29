<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i = 0 ; $i < 5 ; $i++){
            $newTrain = new Train();    
            $newTrain->nome_azienda = $faker->name;
            $newTrain->stazione_partenza = $faker->name;
            $newTrain->stazione_arrivo = $faker->name;
            $newTrain->orario_partenza = $faker->dateTime();
            $newTrain->orario_arrivo = $faker->dateTime();
            $newTrain->codice_treno = $faker->randomNumber(3 , false);
            $newTrain->num_carrozze = $faker->randomNumber(2 , false);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->is_cancellato = $faker->boolean();
            $newTrain->save();


        }
    }
}
