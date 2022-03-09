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
        $data = config("comics");
        
        foreach ($data as $value) {
            $newComic = new Comic();
            $newComic->title = $value["title"];
            $newComic->description = $value["description"];
            $newComic->thumb = $value["thumb"];
            $newComic->price = $value["price"];
            $newComic->series = $value["series"];
            $newComic->sale_date = $value["sale_date"];
            $newComic->type = $value["type"];
            $newComic->save();
        }
    }
}
