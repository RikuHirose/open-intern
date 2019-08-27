<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialProviders extends Model
{
    protected $table = 'social_providers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'provider_id',
        'provider',
    ];    
}
