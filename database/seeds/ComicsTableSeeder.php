<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $comics = config("comics");

       foreach ($comics as $comic ) {
            $new_comics = new Comic();
            $new_comics->title = $comic->title;
            $new_comics->image = $comic->image;
            $new_comics->type = $comic->type;
            $new_comics->save();

       }

    }
}
