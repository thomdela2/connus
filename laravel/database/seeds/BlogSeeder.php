<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $blog = new Blog();

        $blog->title=$faker->sentence($nbWords = 6, $variableNbWords = true);
        $blog->content=$faker->text($maxNbChars = 200);

        $blog->save();
    }
}
