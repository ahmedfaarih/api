<?php

namespace App\Http\Controllers;

use App\Models\Consignment;

class ConsignmentController extends BaseController
{
    public function __construct()
    {
        $this->model = Consignment::class;
        $this->relation=[];
        $this->allowedFilters=['name'];
        $this->allowedIncludes=[];
        $this->allowedSorts=['id'];
    }
}
