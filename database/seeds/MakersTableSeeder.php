<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory;

use App\Maker;

class MakersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 100; $i++) {
            $maker = new Maker;
            $maker->name = $faker->name;
            $maker->phone = $faker->phoneNumber;
            $maker->save();
        }
    }

}