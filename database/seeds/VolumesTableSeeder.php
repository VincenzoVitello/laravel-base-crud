<?php
use App\Volume;
use Illuminate\Database\Seeder;

class VolumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicBooks = config('comics');
        foreach($comicBooks as $comicBook){ //apertura foreach
            $newComicBook = new Volume();
            $newComicBook->title = $comicBook["title"];
            $newComicBook->description = $comicBook["description"];
            $newComicBook->thumb = $comicBook["thumb"];
            $newComicBook->price = $comicBook["price"];
            $newComicBook->series = $comicBook["series"];
            $newComicBook->sale_date = $comicBook["sale_date"];
            $newComicBook->save();
        }//chiusura Foreach
    }
}
