<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $cars = new \App\Car_manager();
            $cars->Car_name ="february";
            $cars->Origin = "USA";
            $cars->Vendor = "Kia-Korea";
            $cars->Amount = "10";
            $cars->save();
        }
    }
}
