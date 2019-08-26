<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_culture',
        'gap',
        'motivation',
        'message',
        'education_environment',
        'opennes',
        'marale',
        'growup_environment',
        'school_status',
        'open_flag',

        'user_id',
        'company_id',
        
    ];

    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class, 'company_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
}
