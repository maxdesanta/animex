<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'director',
        'writers',
        'stars',
        'poster',
        'release_date',
        'duration',
        'url_720',
        'url_1080',
        'url_4k',
    ];

    protected $appends = ['average_rating'];

    protected $casts = [
        'release_date' => 'date',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_movie', 'movie_id', 'category_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'movie_id');
    }

    // menghitung rata - rata rating
    public function getAverageRatingAttribute(): mixed
    {
        $avg = $this->ratings()->avg('rating');
        return $avg;
    }

    // get streaming URL
    public function getStreamingUrl($platResolution):string {
        return match($platResolution) {
            '720' => $this->url_720,
            '1080' => $this->url_1080,
            '4k' => $this->url_4k,
            default => $this->url_720, 
        };
    }

    // get formayed release date
    public function getReleaseDateFormatted() {
        return $this->release_date->format('d M Y');
    }

    // formated duration
    public function getDurationFormatted() {
        $hours = floor($this->duration / 60);
        $minutes = $this->duration % 60;
        $format = '';

        if ($hours > 0) {
            $format .= "{$hours}h ";
        }
        if($minutes > 0 || $hours == 0) {
            $format .= "{$minutes}m";
        }

        return trim($format);
    }
}
