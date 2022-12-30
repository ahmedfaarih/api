<?php

namespace App\Http\Controllers;

use App\Http\Requests\AfrequestRequest;
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
        ->with('consignment','portOfDischarge', 'portOfLanding','shipment', 'term')
        ->allowedFilters(['commodity', 'remarks', 'consignment.name','port.name','shipment.name','term.content'])
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
    public function store(AfrequestRequest $request)
    {
        $validatedData= $request->validated();
        return Afrequest::create($validatedData);
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
        $afrequest->load('portOfDischarge', 'portOfLanding','consignment', 'shipment', 'term');
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
    public function update(AfrequestRequest $request, $id)
    {
        $afrequest = Afrequest::findorfail($id);
        $afrequest->update($request->all());
        return $afrequest;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afrequest  $afrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $afrequest= Afrequest::findorfail($id);
        $afrequest->delete();

        return response(null, 204);
    }
}
