<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyIndustry extends Model
{
    protected $table = 'company_industries';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'industry_id',
        'company_id',
       
    ];

    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class, 'company_id', 'id');
    }

    public function industry()
    {
        return $this->belongsTo(\App\Models\Industry::class, 'industry_id', 'id');
    }
}
