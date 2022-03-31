<?php

use App\Trip;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trip = new Trip();

        $trip->destination = 'Ibiza';
        $trip->departure = '2022-05-21';
        $trip->departure_airport = 'Marco Polo - Venice';
        $trip->return = '2022-06-15';
        $trip->return_airport = 'Sant Antony de Portmany - Spain';
        $trip->ticket_id ='AE555JK';
        $trip->price = 50.50;

        $trip->save();
    }
}
