<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mission',
        'desired_person',
        'name',
        'desc',
        'address',
        'member_count',
        'established_at',
        'founder',
        'hp_url',
        'fb_url',
        'tw_url',
        'pickup_flag',
        
    ];

    public function review()
    {
        return $this->hasMany(\App\Models\Review::class, 'company_id', 'id');
    }

    public function like()
    {
        return $this->hasMany(\App\Models\Like::class, 'company_id', 'id');
    }

    public function companyIndustry()
    {
        return $this->hasMany(\App\Models\CompanyIndustry::class, 'company_id', 'id');
    }

}
