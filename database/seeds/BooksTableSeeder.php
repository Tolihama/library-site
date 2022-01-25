<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) { 
            //creazione instanza
            $new_book = new Book();

            $new_book->title = $faker->text(100);
            $new_book->author = $faker->name();
            $new_book->genres = $faker->words(3, true);
            $new_book->price = $faker->randomFloat(2, 20, 90);

            $new_book->save();
        }
    }
}
