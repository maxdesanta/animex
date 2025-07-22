<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // Kosongkan tabel sebelum melakukan seed
        DB::table('categories')->truncate();

        $cat = [
            "Fantasy",
            "Science Fiction",
            "Romance",
            "Drama",
            "Action",
            "Adventure",
            "Psychological / Thriller",
            "Historical",
            "Slice of Life",
            "Supernatural / Mystery",
        ];

        // Insert each category into the database
        foreach ($cat as $category) {
            DB::table('categories')->insert([
                'title' => $category,
                'slug' => Str::of($category)->slug('-'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Aktifkan kembali foreign key checks
        Schema::enableForeignKeyConstraints();
    }
}
