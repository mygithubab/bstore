<?php

use Illuminate\Database\Seeder;
use App\book;
//use Factory;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate
        Book::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Book::create([
                'author' => $faker->name,
                'title' => $faker->name,
                'isbn' => $faker->name,
                'gener' => $faker->name,
                'pub_date' => $faker->date,
                'publisher' => $faker->name,

            ]);
        }
    }
}
