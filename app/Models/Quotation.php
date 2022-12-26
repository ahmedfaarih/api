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
        return $this->belongsTo(Afrequest::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
