<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortRequest;
use App\Models\Port;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
class PortController extends Controller
{
    public function index()
    {
         $ports = QueryBuilder::for(Port::class)
        ->simplePaginate(10);
         
        return $ports;
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        $port = Port::findorfail($id);
        return $port;
    }

    public function store(PortRequest $request)
    {
        $validatedData= $request->validated();
        return Port::create($validatedData);
    }

    public function update(PortRequest $request, $id)
    {
        $port = Port::findorfail($id);
        $port->update($request->all());
        return $port;
    }

    public function destroy($id)
    {
        $port= Port::findorfail($id);
        $port->delete();

        return response(null, 204);
    }

}
