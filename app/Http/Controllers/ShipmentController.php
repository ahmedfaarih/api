<?php

namespace App\Http\Controllers;

use App\Models\Shipment;

class ShipmentController extends BaseController
{
    public function __construct()
    {
        $this->model = Shipment::class;
    }
}
