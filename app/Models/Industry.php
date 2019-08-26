<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $table = 'industries';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'desc',
        
    ];

    public function companyIndustry()
    {
        return $this->hasMany(\App\Models\CompanyIndustry::class, 'industry_id', 'id');
    }

}
