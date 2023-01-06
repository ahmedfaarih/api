<?php

namespace App\Http\Controllers;

use App\Models\SubJob;
use Illuminate\Http\Request;

class SubJobController extends BaseController
{
    public function __construct()
    {
        $this->model = SubJob::class;
        $this->relation=['jobs'];
        $this->allowedFilters=['name','price'];
        $this->allowedIncludes=['jobs'];
        $this->allowedSorts=['id'];
    }
}
