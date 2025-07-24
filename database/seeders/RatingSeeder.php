<?php

namespace Database\Seeders;

use App\Models\Movies;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        
        $movies = Movies::all();
        $users = User::all();

        $ratings = [];

        foreach ($movies as $movie) {
            foreach ($users as $user) {
                $ratings[] = [
                    'user_id' => $user->id,
                    'movie_id' => $movie->id,
                    'rating' => fake()->randomFloat(1, 0, 10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('ratings')->insert($ratings);
        Schema::enableForeignKeyConstraints();
    }
}
