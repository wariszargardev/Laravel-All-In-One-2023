<?php

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

Route::prefix('dataset')->group(function (){
   Route::post('zip-extract', [\App\Http\Controllers\DatasetController::class, 'extractUploadedZip']);
   Route::post('get-data', [\App\Http\Controllers\DatasetController::class, 'readFromStorage']);
   Route::post('listing', [\App\Http\Controllers\DatasetController::class, 'recordListing']);
});
