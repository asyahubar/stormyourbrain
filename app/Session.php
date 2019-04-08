<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The users that belong to the session.
     */
    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }

    /**
     * The ideas that belong to the session.
     */
    public function ideas()
    {
        return $this->hasMany(\App\Idea::class);
    }
}
