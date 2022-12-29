<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Spatie\QueryBuilder\QueryBuilder;
class QuotationController extends BaseController
{
    public function __construct()
    {
        $this->model = Quotation::class;
    }

    public function index(){
        $quotes = QueryBuilder::for(Quotation::class)
        ->with('afRequests')
        ->simplePaginate(10);
         
        return $quotes;
    }
}
