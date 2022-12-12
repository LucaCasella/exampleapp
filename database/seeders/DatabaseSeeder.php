<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $profile = Http::acceptJson()
            ->withoutVerifying()
            ->get('https://randomuser.me/api/')
            ->json();

        $name = $profile['results'][0]['name']['first'];
        $surname = $profile['results'][0]['name']['last'];
        $pic = $profile['results'][0]['picture']['medium'];

        $picture  = file_get_contents($pic);  // db:seed inserisce nel field una stringa di caratteri alfa
//        $pictureEncoded = base64_encode($picture);  // db:seed inserisce nel field una vera e propria immagine (es: 72x72 JPEG image 3,85 kB)

        DB::table('table_users')->insert(
            [
                'name' => $name,
                'surname' => $surname,
                'picture' => $picture
            ]
        );

    }
}
