<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubJob extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'sub_job_jobs','job_id','sub_job_id')->withTimestamps();
    }
}
