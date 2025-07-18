<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';

    protected $fillable = [
        'title',
        'price',
        'duration',
        'resolution',
        'max_devices',
    ];

    // relasi membership
    public function memberships() {
        return $this->hasMany(Membership::class);
    }

    // relasi user
    public function users() {
        return $this->belongsToMany(User::class, 'memberships', 'plan_id', 'user_id');
    }
}
