<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UserSeeder extends Seeder
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
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastname,
                'tel' => '0612345978',
                'address' => $faker->address,
                'email' => $faker->email,
                'password' => bcrypt('123456')
            ]);
        }
    }
}
