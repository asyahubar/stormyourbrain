<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'rating', 'eliminated', 'session_id', 'created_by'
    ];

    /**
     * The session that belong to the idea.
     */
    public function session()
    {
        return $this->belongsTo(\App\Session::class);
    }

    /**
     * The user (aka creator) that belong to the idea.
     */
    public function creator()
    {
        return $this->belongsTo(\App\User::class);
    }
}
