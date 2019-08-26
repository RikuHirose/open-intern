<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'name',
        'furigana',
        'phone_namber',
        'birthday',
        'male',
        'address',
        'career_status',
        'school_status',
        'school_name',
        'fuculty',
        'graduate_plan',
        
    ];

    public function socialProvider()
    {
        return $this->belongsTo(\App\Models\SocialProvider::class, 'id', 'user_id');
    }

    public function review()
    {
        return $this->hasMany(\App\Models\Review::class, 'user_id', 'id');
    }

    public function like()
    {
        return $this->hasMany(\App\Models\Like::class, 'user_id', 'id');
    }
}
