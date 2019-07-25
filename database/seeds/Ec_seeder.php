<?php

use Illuminate\Database\Seeder;
use App\Ec_cat;
use App\Ec_item;
class Ec_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = Faker\Factory::create();
        for ($f=0; $f < 5; $f++) { 
            Ec_cat::create([
                'category_name' => $seed->jobTitle
            ]);
        }
        $seed = Faker\Factory::create();
        for ($f=0; $f < 5; $f++) { 
            Ec_item::create([
                'product_name' => $seed->word,
                'amount' => rand(1,50),
                'price' => $seed->randomNumber($nbDigits = NULL, $strict = false),
                'photo' => $seed->lastName,
                'cat_id' => rand(1,5)
            ]);
        }
    }
}
