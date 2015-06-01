<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory;

use App\Vehicle;

class VehiclesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 100; $i++) {
            $vehicle = new Vehicle;
            $vehicle->color = $faker->colorName;
            $vehicle->power = $faker->randomNumber;
            $vehicle->capacity = $faker->randomFloat;
            $vehicle->speed = $faker->randomFloat;
            $vehicle->maker_id = $faker->numberBetween(1, 5);
            $vehicle->save();
        }
    }

}