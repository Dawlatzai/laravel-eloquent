<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'website_url', 'twitter_url', 'github_url'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
