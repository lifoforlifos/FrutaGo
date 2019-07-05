<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Order;

class OrderSeeder extends Seeder
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
        Order::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $usersIDs = DB::table('users')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            Order::create([
                'user_id' => $faker->randomElement($usersIDs),
                'quantity' => mt_rand(1, 100),
                'price' => mt_rand(1, 100),
                'date' => '2019-07-07'
            ]);
        }
    }
}
