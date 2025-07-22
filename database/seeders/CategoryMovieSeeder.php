<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoryMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // Kosongkan tabel sebelum melakukan seed
        DB::table('category_movie')->truncate();

        // MENGHUBUNGKAN KETEGORI DAN MOVIE DENGAN TABLE CATEGORY_MOVIE
        $categoryId = DB::table('categories')->pluck('id')->toArray();
        $movieId = DB::table('movies')->pluck('id')->toArray();

        foreach ($movieId as $movie) {
            $randomCategoryCount = array_rand($categoryId, rand(1, 3));
            $randomCategoryCount = (array) $randomCategoryCount;
            foreach ($randomCategoryCount as $category) {
                DB::table('category_movie')->insert([
                    'movie_id' => $movie,
                    'category_id' => $categoryId[$category],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Aktifkan kembali foreign key checks
        Schema::enableForeignKeyConstraints();
    }
}
