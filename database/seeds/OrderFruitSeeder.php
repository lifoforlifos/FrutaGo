<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Order_Fruit;

class OrderFruitSeeder extends Seeder
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
        Order_Fruit::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $usersIDs = DB::table('users')->pluck('id');
        $fruitsIDs = DB::table('users')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            Order_Fruit::create([
                'user_id' => $faker->randomElement($usersIDs),
                'fruit_id' => $faker->randomElement($fruitsIDs),
                'quantity' => mt_rand(1, 10000)
            ]);
        }
    }
}
