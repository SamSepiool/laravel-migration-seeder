<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

            
        for ( $i = 0; $i < 100; $i++ ) {
            // RANDOM-VARS
            $departureDate= $faker->date('Y-m-d');
            $duration= $faker->numberBetween(2, 20);
            $returnDate = date('Y-m-d',strtotime($departureDate . $duration . "days"));
            $flightPrice = $faker->randomFloat(2, 50, 1000);
            $hotelPrice = $faker->randomFloat(2, 200, 5000);
            // ----------

            $newTrip = new Trip();

            $newTrip->destination = $faker->country();
            $newTrip->duration_days = $duration;
            $newTrip->departure_date = $departureDate;
            $newTrip->return_date = $returnDate;
            $newTrip->airline = $faker->words(2, true);
            $newTrip->flight_price = $flightPrice;
            $newTrip->hotel = $faker->words(2, true);
            $newTrip->hotel_price = $hotelPrice;
            $newTrip->total_price = $flightPrice + $hotelPrice;
            $newTrip->transfer = $faker->boolean();
            $newTrip->save();
        }
    }
}
