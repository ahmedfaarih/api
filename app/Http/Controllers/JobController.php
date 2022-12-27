<?php

namespace App\Http\Controllers;

use App\Models\Job;


class JobController extends BaseController
{
    public function __construct()
    {
        $this->model = Job::class;
    }
}
