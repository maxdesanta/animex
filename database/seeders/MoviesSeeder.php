<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // Kosongkan tabel sebelum melakukan seed
        DB::table('movies')->truncate();

        $movies = [
            [
                'title' => 'Your Name',
                'slug' => 'your-name',
                'description' => 'Dua remaja saling bertukar tubuh dan menjalin koneksi lintas ruang dan waktu.',
                'director' => 'Makoto Shinkai',
                'writers' => 'Makoto Shinkai',
                'stars' => 'Ryunosuke Kamiki, Mone Kamishiraishi',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/0/0b/Your_Name_poster.png',
                'release_date' => '2016-08-26',
                'duration' => 106,
                'url_720' => "https://drive.google.com/file/d/1V3xd_LvQ38cordhMQu6vvD9yw2P76D_y/view?usp=drive_link",
                'url_1080' => "https://drive.google.com/file/d/1V3xd_LvQ38cordhMQu6vvD9yw2P76D_y/view?usp=drive_link",
                'url_4k' => "https://drive.google.com/file/d/1V3xd_LvQ38cordhMQu6vvD9yw2P76D_y/view?usp=drive_link",
            ],
            [
                'title' => 'Spirited Away',
                'slug' => 'spirited-away',
                'description' => 'Seorang gadis muda terjebak di dunia roh dan berjuang menyelamatkan orang tuanya.',
                'director' => 'Hayao Miyazaki',
                'writers' => 'Hayao Miyazaki',
                'stars' => 'Rumi Hiiragi, Miyu Irino',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/d/db/Spirited_Away_Japanese_poster.png',
                'release_date' => '2001-07-20',
                'duration' => 125,
                'url_720' => "https://drive.google.com/file/d/11hPMAeuUvrmlsiHhmRBpzLMgKrcW6i6i/view?usp=drive_link",
                'url_1080' => "https://drive.google.com/file/d/11hPMAeuUvrmlsiHhmRBpzLMgKrcW6i6i/view?usp=drive_link",
                'url_4k' => "https://drive.google.com/file/d/11hPMAeuUvrmlsiHhmRBpzLMgKrcW6i6i/view?usp=drive_link",
            ],
            [
                'title' => 'A Silent Voice',
                'slug' => 'a-silent-voice',
                'description' => 'Seorang siswa yang dulunya membully gadis tuli berusaha menebus kesalahannya.',
                'director' => 'Naoko Yamada',
                'writers' => 'Reiko Yoshida',
                'stars' => 'Miyu Irino, Saori Hayami',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/3/32/A_Silent_Voice_Film_Poster.jpg',
                'release_date' => '2016-09-17',
                'duration' => 130,
                'url_720' => "https://drive.google.com/file/d/1E8BcljgLjsq7aUG0t__vL6kxIPUQQUAD/view?usp=drive_link",
                'url_1080' => "https://drive.google.com/file/d/1E8BcljgLjsq7aUG0t__vL6kxIPUQQUAD/view?usp=drive_link",
                'url_4k' => "https://drive.google.com/file/d/1E8BcljgLjsq7aUG0t__vL6kxIPUQQUAD/view?usp=drive_link",
            ],
            [
                'title' => 'Weathering with You',
                'slug' => 'weathering-with-you',
                'description' => 'Seorang remaja bertemu gadis yang bisa mengendalikan cuaca.',
                'director' => 'Makoto Shinkai',
                'writers' => 'Makoto Shinkai',
                'stars' => 'Kotaro Daigo, Nana Mori',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/6/66/Weathering_with_You_Poster.jpg',
                'release_date' => '2019-07-19',
                'duration' => 112,
                'url_720' => "https://drive.google.com/file/d/1YfNICuNvywAJa_iBmvsULcp80iTG43Ol/view?usp=drive_link",
                'url_1080' => "https://drive.google.com/file/d/1YfNICuNvywAJa_iBmvsULcp80iTG43Ol/view?usp=drive_link",
                'url_4k' => "https://drive.google.com/file/d/1YfNICuNvywAJa_iBmvsULcp80iTG43Ol/view?usp=drive_link",
            ],
            [
                'title' => 'Demon Slayer: Mugen Train',
                'slug' => 'demon-slayer-mugen-train',
                'description' => 'Tanjiro dan teman-temannya naik kereta penuh iblis dalam misi penyelamatan.',
                'director' => 'Haruo Sotozaki',
                'writers' => 'Koyoharu Gotouge',
                'stars' => 'Natsuki Hanae, Akari Kitō',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/2/21/Kimetsu_no_Yaiba_Mugen_Ressha_Hen_Poster.jpg',
                'release_date' => '2020-10-16',
                'duration' => 117,
                'url_720' => "https://drive.google.com/file/d/15XybWXKRn-JHNSkVPUNQ0KUxEKf7qTs_/view?usp=drive_link",
                'url_1080' => "https://drive.google.com/file/d/15XybWXKRn-JHNSkVPUNQ0KUxEKf7qTs_/view?usp=drive_link",
                'url_4k' => "https://drive.google.com/file/d/15XybWXKRn-JHNSkVPUNQ0KUxEKf7qTs_/view?usp=drive_link",
            ],
            [
                'title' => '5 Centimeters per Second',
                'slug' => '5-centimeters-per-second',
                'description' => 'Kisah cinta jarak jauh dua teman masa kecil yang terpisah oleh waktu.',
                'director' => 'Makoto Shinkai',
                'writers' => 'Makoto Shinkai',
                'stars' => 'Kenji Mizuhashi, Yoshimi Kondou',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/7/79/5_Centimeters_Per_Second_poster.jpg',
                'release_date' => '2007-03-03',
                'duration' => 63,
                'url_720' => "https://www.youtube.com/watch?v=wdM7athAem0",
                'url_1080' => "https://www.youtube.com/watch?v=wdM7athAem0",
                'url_4k' => "https://www.youtube.com/watch?v=wdM7athAem0",
            ],
            [
                'title' => 'The Garden of Words',
                'slug' => 'the-garden-of-words',
                'description' => 'Seorang siswa dan wanita dewasa menjalin hubungan di taman saat hujan.',
                'director' => 'Makoto Shinkai',
                'writers' => 'Makoto Shinkai',
                'stars' => 'Miyu Irino, Kana Hanazawa',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/c/c3/Garden_of_Words_poster.png',
                'release_date' => '2013-05-31',
                'duration' => 46,
                'url_720' => "https://www.youtube.com/watch?v=FMabhvDoolc",
                'url_1080' => "https://www.youtube.com/watch?v=FMabhvDoolc",
                'url_4k' => "https://www.youtube.com/watch?v=FMabhvDoolc",
            ],
            [
                'title' => 'The Tale of the Princess Kaguya',
                'slug' => 'princess-kaguya',
                'description' => 'Adaptasi dongeng klasik Jepang tentang gadis dari bulan.',
                'director' => 'Isao Takahata',
                'writers' => 'Isao Takahata',
                'stars' => 'Aki Asakura, Kengo Kora',
                'poster' => 'kaguya.jpg',
                'release_date' => '2013-11-23',
                'duration' => 137,
                'url_720' => "https://www.youtube.com/watch?v=W71mtorCZDw",
                'url_1080' => "https://www.youtube.com/watch?v=W71mtorCZDw",
                'url_4k' => "https://www.youtube.com/watch?v=W71mtorCZDw",
            ],
            [
                'title' => 'Paprika',
                'slug' => 'paprika',
                'description' => 'Perjalanan mimpi dan realita seorang psikolog menggunakan alat canggih.',
                'director' => 'Satoshi Kon',
                'writers' => 'Yasutaka Tsutsui',
                'stars' => 'Megumi Hayashibara, Toru Furuya',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/1/16/Paprikaposter.jpg',
                'release_date' => '2006-11-25',
                'duration' => 90,
                'url_720' => "https://youtu.be/yn7U1KIGeuQ?si=jTJ_QuNLFUIK-xYM",
                'url_1080' => "https://youtu.be/yn7U1KIGeuQ?si=jTJ_QuNLFUIK-xYM",
                'url_4k' => "https://youtu.be/yn7U1KIGeuQ?si=jTJ_QuNLFUIK-xYM",
            ],
            [
                'title' => 'The Girl Who Leapt Through Time',
                'slug' => 'the-girl-who-leapt-through-time',
                'description' => 'Seorang gadis remaja menemukan kekuatan untuk melompat melintasi waktu.',
                'director' => 'Mamoru Hosoda',
                'writers' => 'Satoko Okudera',
                'stars' => 'Riisa Naka, Takuya Ishida',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/4/43/Toki_o_Kakeru_Sh%C5%8Djo.jpg',
                'release_date' => '2006-07-15',
                'duration' => 98,
                'url_720' => "https://youtu.be/eWnTeKEsDlU?si=F7sXgSuXqeu2RUUG",
                'url_1080' => "https://youtu.be/eWnTeKEsDlU?si=F7sXgSuXqeu2RUUG",
                'url_4k' => "https://youtu.be/eWnTeKEsDlU?si=F7sXgSuXqeu2RUUG",
            ],
            [
                'title' => 'Children Who Chase Lost Voices',
                'slug' => 'children-who-chase-lost-voices',
                'description' => 'Gadis muda menjelajahi dunia bawah tanah demi menghidupkan kembali kenangan.',
                'director' => 'Makoto Shinkai',
                'writers' => 'Makoto Shinkai',
                'stars' => 'Hisako Kanemoto, Miyu Irino',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/2/26/Children_Who_Chase_Lost_Voices.png',
                'release_date' => '2011-05-07',
                'duration' => 116,
                'url_720' => "https://youtu.be/tmHo_0mgos0?si=yjVHpqvMhxOb2QWb",
                'url_1080' => "https://youtu.be/tmHo_0mgos0?si=yjVHpqvMhxOb2QWb",
                'url_4k' => "https://youtu.be/tmHo_0mgos0?si=yjVHpqvMhxOb2QWb",
            ],
            [
                'title' => 'Wolf Children',
                'slug' => 'wolf-children',
                'description' => 'Seorang ibu membesarkan dua anak setengah manusia setengah serigala.',
                'director' => 'Mamoru Hosoda',
                'writers' => 'Mamoru Hosoda',
                'stars' => 'Aoi Miyazaki, Takao Osawa',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/9/9c/%C5%8Ckami_Kodomo_no_Ame_to_Yuki_poster.jpg',
                'release_date' => '2012-07-21',
                'duration' => 117,
                'url_720' => "https://youtu.be/_Q36E7JJWVw?si=3EcdQKJ7oKxfa5d4",
                'url_1080' => "https://youtu.be/_Q36E7JJWVw?si=3EcdQKJ7oKxfa5d4",
                'url_4k' => "https://youtu.be/_Q36E7JJWVw?si=3EcdQKJ7oKxfa5d4",
            ],
            [
                'title' => 'Whisper of the Heart',
                'slug' => 'whisper-of-the-heart',
                'description' => 'Seorang gadis remaja menemukan jati dirinya melalui dunia menulis.',
                'director' => 'Yoshifumi Kondō',
                'writers' => 'Hayao Miyazaki',
                'stars' => 'Yoko Honna, Issei Takahashi',
                'poster' => 'https://upload.wikimedia.org/wikipedia/id/9/93/Whisper_of_the_Heart_%28Movie_Poster%29.jpg',
                'release_date' => '1995-07-15',
                'duration' => 111,
                'url_720' => "https://youtu.be/0pVkiod6V0U?si=q4JBqrGWwOJst51P",
                'url_1080' => "https://youtu.be/0pVkiod6V0U?si=q4JBqrGWwOJst51P",
                'url_4k' => "https://youtu.be/0pVkiod6V0U?si=q4JBqrGWwOJst51P",
            ]
        ];

        DB::table('movies')->insert($movies);

        // Aktifkan kembali foreign key checks
        Schema::enableForeignKeyConstraints();
    }
}
