<?php

namespace App\Http\Controllers;


use App\Models\Term;

class TermController extends BaseController
{
    public function __construct()
    {
        $this->model = Term::class;
        $this->relation=[];
        $this->allowedFilters=['content'];
        $this->allowedIncludes=[];
        $this->allowedSorts=['id'];
    }
}
