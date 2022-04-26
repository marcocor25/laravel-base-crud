<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $el) {

            $comic = new Comic();

            $comic->title = $el['title'];
            $comic->description = $el['description'];
            $comic->thumb = $el['thumb'];
            $comic->price = $el['price'];
            $comic->series = $el['series'];
            $comic->sale_date = $el['sale_date'];
            $comic->type = $el['type'];

            $comic->save();
        }
    }
}
