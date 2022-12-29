<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function afRequests()
    {
        return $this->belongsTo(Afrequest::class, 'af_request_id');
    }

    public function jobs()
    {
        return $this->belongsToMany(Job::class,'quotation_jobs', 'quotation_id','job_id' )->withTimestamps();; 
        // return $this->belongsToMany(Quotation::class, 'quotation_jobs','job_id','quotation_id');

    }
}
