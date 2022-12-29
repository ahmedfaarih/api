<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Quotation;
use Illuminate\Http\Request;

use Spatie\QueryBuilder\QueryBuilder;

use function GuzzleHttp\Promise\queue;

class QuotationController extends Controller
{
    public function __construct()
    {
        $this->model = Quotation::class;
    }

    public function index(){
        $quotes = QueryBuilder::for(Quotation::class)
        ->with('afRequests','jobs.subJobs')
        ->simplePaginate(10);
         
        return $quotes;
    }

    public function show($id){
        $quote = Quotation::findOrFail($id);
        $quote->load('afRequests','jobs.subJobs');
        return $quote;
    }

    public function store(Request $request)
    {   
        $request->validate([
            "af_request_id" => 'required',
            "user_id" => 'required',
            "quotation_number" => 'required',
            "discount_rate" => 'required',
            "gst" => 'required',
        ]);
        $quotation = Quotation::create($request->all());
        return $quotation;
    }

    public function attachJob($jobId,Request $request){

        $quotation = Quotation::findOrFail($request->quotation_id);
        $job=Job::findorFail($jobId);
        $quotation->jobs()->attach($jobId);
        $quotation->sub_total+=$job->price;
        $quotation->save();
        
    }

    
}
