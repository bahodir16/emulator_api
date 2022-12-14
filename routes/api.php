<?php

use App\Http\Controllers\API\v1\CalculateController;
use App\Http\Controllers\API\CallController;
use App\Http\Controllers\API\v1\OrderProccessingController;
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


Route::group(['prefix' => '/tsv1/processing'],function () {
    Route::get('/get', [OrderProccessingController::class, 'get_order_info']);
});

Route::post('/tsv1/owner/price', [CalculateController::class, 'calcluate']);
Route::post('/tsv1/owner/call', [CallController::class, 'call']);

