<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['title', 'slug'];

    public function movies()
    {
        return $this->belongsToMany(Movies::class);
    }
}
