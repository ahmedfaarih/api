<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afrequest extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function consignment()
    {
        return $this->belongsTo(Consignment::class);
    }

    public function port()
    {
        return $this->belongsTo(Port::class);
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }

    public function Term()
    {
        return $this->belongsTo(Term::class);
    }

    
}
