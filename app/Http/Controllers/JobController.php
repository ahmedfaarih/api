<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Spatie\QueryBuilder\QueryBuilder;

class JobController extends BaseController
{
    public function __construct()
    {
        $this->model = Job::class;
    }

    public function index(){
        $jobs = QueryBuilder::for(Job::class)
        ->with('subJobs')
        ->simplePaginate(10);
        return $jobs;
    }

}
