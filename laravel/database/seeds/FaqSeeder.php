<?php

use App\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $faq = new Faq();

        $faq->question=$faker->sentence($nbWords = 6, $variableNbWords = true);
        $faq->answer=$faker->sentence($nbWords = 8, $variableNbWords = true);

        $faq->save();
    }
}
