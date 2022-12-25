<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Afrequest extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function consignment()
    {
        return $this->belongsTo(Consignment::class, 'consignee_id');
    }

    public function port()
    {
        return $this->belongsTo(Port::class, 'port_id_dc');
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'shipper_id');
    }

    public function Term()
    {
        return $this->BelongsTo(Term::class, 'terms_id');
    }

    
}
