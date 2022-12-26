<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsignmentRequest;
use App\Models\Consignment;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
class ConsignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $consignments = QueryBuilder::for(Consignment::class)
        ->simplePaginate(10);
         
        return $consignments;
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
    public function store(ConsignmentRequest $request)
    {
        $validatedData= $request->validated();
        return Consignment::create($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consignment  $consignment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consignment = Consignment::findorfail($id);
        return $consignment;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consignment  $consignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Consignment $consignment)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consignment  $consignment
     * @return \Illuminate\Http\Response
     */
    public function update(ConsignmentRequest $request, $id)
    {
        $consignment = Consignment::findorfail($id);
        $consignment->update($request->all());
        return $consignment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consignment  $consignment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consignment= Consignment::findorfail($id);
        $consignment->delete();

        return response(null, 204);
    }
}
