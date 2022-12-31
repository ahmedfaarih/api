<?php

namespace App\Http\Controllers;

use App\Models\Port;

class PortController extends BaseController
{
    public function __construct()
    {
        $this->model = Port::class;
        $this->relation=[];
        $this->allowedFilters=['name'];
        $this->allowedIncludes=[];
        $this->allowedSorts=['id'];
    }
    
}
