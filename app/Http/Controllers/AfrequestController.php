<?php

namespace App\Http\Controllers;

use App\Models\Afrequest;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
class AfrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $afRequests = QueryBuilder::for(Afrequest::class)
        ->with('consignment', 'port','shipment', 'term')
        ->simplePaginate(10);
         
        return $afRequests;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afrequest  $afrequest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $afrequest = Afrequest::findorfail($id);
        $afrequest->load('consignment', 'port','shipment', 'term');
        return $afrequest;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Afrequest  $afrequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Afrequest $afrequest)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Afrequest  $afrequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afrequest $afrequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afrequest  $afrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afrequest $afrequest)
    {
        //
    }
}
