<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Fruit;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Fruit::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for ($i = 1; $i <= 20; $i++) {
            Fruit::create([
                'nom' => $faker->name,
                'pays_origin' => $faker->name,
                'price' => mt_rand(1, 1000)
            ]);
        }
    }
}
