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
Route::apiresource('/user', "App\Http\Controllers\API\UserController");
Route::apiresource('/Terrain', "App\Http\Controllers\API\TerrainController");
Route::apiresource('/joueur', "App\Http\Controllers\API\joueurController");
Route::apiresource('/Complexe', "App\Http\Controllers\API\ComplexeController");
Route::apiresource('/Reservation', "App\Http\Controllers\API\ReservationController");
Route::apiresource('/Gerant', "App\Http\Controllers\API\GerantController");
Route::apiresource('/Crenaux', "App\Http\Controllers\API\CrenauxController");
Route::apiresource('/Données', "App\Http\Controllers\API\DonnéesController");
Route::apiresource('/Direction', "App\Http\Controllers\API\DirectionController");
});

