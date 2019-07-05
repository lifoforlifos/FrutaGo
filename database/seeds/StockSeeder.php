<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Stock;

class StockSeeder extends Seeder
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
        Stock::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $fruitsIDs = DB::table('users')->pluck('id');

        for ($i = 1; $i <= 20; $i++) {
            Stock::create([
                'fruit_id' => $faker->randomElement($fruitsIDs),
                'quantity' => mt_rand(1, 10000)
            ]);
        }
    }
}
