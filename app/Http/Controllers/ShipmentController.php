<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShipmentRequest;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
class ShipmentController extends Controller
{
    public function index()
    {
         $shipment = QueryBuilder::for(Shipment::class)
        ->simplePaginate(10);
         
        return $shipment;
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        $shipment = Shipment::findorfail($id);
        return $shipment;
    }

    public function store(ShipmentRequest $request)
    {
        $validatedData= $request->validated();
        return Shipment::create($validatedData);
    }

    public function update(ShipmentRequest $request, $id)
    {
        $shipment = Shipment::findorfail($id);
        $shipment->update($request->all());
        return $shipment;
    }

    public function destroy($id)
    {
        $shipment= Shipment::findorfail($id);
        $shipment->delete();

        return response(null, 204);
    }
}
