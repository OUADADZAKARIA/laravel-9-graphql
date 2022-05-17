<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $a = 0;
        while ($a <= 10) {
            Book::create([
                'title' => $faker->firstNameMale,
                'sub_title' => $faker->title,
                'author' => $faker->firstNameFemale,
            ]);
            $a++;
        }
    }
}
