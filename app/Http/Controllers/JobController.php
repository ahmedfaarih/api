<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Spatie\QueryBuilder\QueryBuilder;

class JobController extends BaseController
{
    public function __construct()
    {
        $this->model = Job::class;
        $this->relation=['subJobs'];
        $this->allowedFilters=['name'];
        $this->allowedIncludes=['subJobs'];
        $this->allowedSorts=['id'];
    }

}
