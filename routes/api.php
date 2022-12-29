<?php

use App\Http\Controllers\AfrequestController;
use App\Http\Controllers\ConsignmentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\TermController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('consignments',ConsignmentController::class);
Route::apiResource('ports',PortController::class);
Route::apiResource('shipments',ShipmentController::class);
Route::apiResource('terms',TermController::class);
Route::apiResource('jobs',JobController::class);
Route::apiResource('quotations',QuotationController::class);

Route::controller(AfrequestController::class)->group(function (){
    Route::get('afRequests', 'index');
    Route::get('afRequests/{id}', 'show');
    Route::post('afRequests', 'store');
    Route::patch('afRequests/{id}', 'update');
    Route::delete('afRequests/{id}', 'delete');
});



