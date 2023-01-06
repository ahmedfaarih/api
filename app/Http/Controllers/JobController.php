<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\SubJob;
use Illuminate\Http\Request;
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

    public function attachJob($subJobId, Request $request){
        $job = Job::findOrFail($request->job_id);
        $subJob=SubJob::findorFail($subJobId);
        $job->subJobs()->attach($subJobId);
        $job->price+=$subJob->price;
        $job->save();
    }

    public function detachJob($subJobId, Request $request){
        $job = Job::findOrFail($request->job_id);
        $subJob=SubJob::findorFail($subJobId);
        $job->subJobs()->detach($subJobId);
        $job->price-=$subJob->price;
        $job->save();
    }
}
