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
        return $this->belongsToMany(Job::class,'quotation_jobs', 'quotation_id','job_id' )->withTimestamps();

    }

    public function calculateNetTotal($quotation){
        $quotation->net_total=
        $quotation->sub_total+($quotation->sub_total * $quotation->gst/100);
        $quotation->save();
        $quotation->refresh();
        $quotation->net_total=
        $quotation->net_total-($quotation->sub_total * $quotation->discount_rate/100);
        $quotation->save();
    }
}
