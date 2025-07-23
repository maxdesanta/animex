<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';
    protected $fillable = ['user_id', 'movie_id', 'rating'];

    public function movie()
    {
        return $this->belongsTo(Movies::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
