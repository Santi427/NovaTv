<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new Movie;
        $movie->name = 'La Abuela';
        $movie->description ='Susana tiene que dejar su vida en París trabajando como modelo para regresar a Madrid porque su abuela Pilar acaba de sufrir un derrame cerebral. Lo que deberían ser solo unos días con su abuela, se acabarán convirtiendo en una terrorífica pesadilla';
        $movie->quality = '720p';
        $movie->image = 'La_abuela-214322397-large.jpg';
        $movie->release_year = '2022-12-09';
        $movie->language = 'English/Spanish';
        $movie->video_link = 'https://www.google.com/search?q=pelicula+Atenea&source=lmns&tbm=vid&bih=625&biw=1366&rlz=1C1ONGR_esCO1043CO1043&hl=es-419&sa=X&ved=2ahUKEwiG6ojbh7f9AhXuWTABHaanDnkQ_AUoAnoECAEQAg#fpstate=ive&vld=cid:b3634b20,vid:EuvERXZZ-r8';
        $movie->download_link = 'https://www.google.com/search?q=pelicula+Atenea&source=lmns&tbm=vid&bih=625&biw=1366&rlz=1C1ONGR_esCO1043CO1043&hl=es-419&sa=X&ved=2ahUKEwiG6ojbh7f9AhXuWTABHaanDnkQ_AUoAnoECAEQAg#fpstate=ive&vld=cid:b3634b20,vid:EuvERXZZ-r8';
        $movie->user_id = '1';
        $movie->category_id = '1';
        $movie->save();


        $movie = new Movie;
        $movie->name = 'Titanic';
        $movie->description ='Una joven de la alta sociedad abandona a su arrogante pretendiente por un artista humilde en el trasatlántico que se hundió durante su viaje inaugural';
        $movie->quality = 'FullHd';
        $movie->image = 'titanic.jpg';
        $movie->release_year = '1997-04-27';
        $movie->language = 'English/Spanish';
        $movie->video_link = 'https://www5.pelisplushd.lat/pelicula/titanic';
        $movie->download_link = 'https://www.scoop.it/topic/pelisplus-ver-titanic-pelicula-completa-online-en-espanol-y-latino-by-ratke-40';
        $movie->user_id = '2';
        $movie->category_id = '2';
        $movie->save();
    }
}
