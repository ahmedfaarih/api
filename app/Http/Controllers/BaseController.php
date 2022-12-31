<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
class BaseController extends Controller
{
    protected $model;
    protected $allowedIncludes;    
    protected $allowedFilters;    
    protected $allowedSorts;    
    protected $relation;    
    
    //pass model through controller
    public function index()
    {
        $data =  QueryBuilder::for($this->model)
        ->with($this->relation)
        ->allowedFilters($this->allowedFilters)
        ->allowedIncludes($this->allowedIncludes)
        ->allowedSorts($this->allowedIncludes)
        ->simplePaginate(10);
        return $data;
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $model = app()->make($this->model);
        $validatedData = $request->validate($model->storeRules());
        //make sure data is validated through requests
        $data = $model::create( $validatedData );
        return $data;

    }

    
    public function show($id)
    {
        $data = $this->model::findOrFail($id);
        return $data;
    }

    
    public function edit(Consignment $consignment)
    {
       
    }

    
    public function update(Request $request, $id)
    {
        $model = app()->make($this->model);
        $modelData = $model->findOrFail($id);
        $validatedData = $request->validate($model->updateRules());
        //make sure data is validated through requests
        $data = $modelData->update( $validatedData );
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consignment  $consignment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = app()->make($this->model);
        $modelData = $model->findOrFail($id);
        $modelData->delete();
        return response(null, 204);
    }

}
