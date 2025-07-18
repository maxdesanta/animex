<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'memberships';

    protected $fillable = [
        'user_id',
        'plan_id',
        'active',
        'start_date',
        'end_date',
    ];

    // relasi plan
    public function plan() {
        return $this->belongsTo(Plan::class);
    } 

    // relasi user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
