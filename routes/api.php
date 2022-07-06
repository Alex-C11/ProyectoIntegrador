<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AssistenceController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\DebitController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\StandController;
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
route::apiResource('people',PeopleController::class);
route::apiResource('periods',PeriodController::class);
route::apiResource('stands',StandController::class);
route::apiResource('associations',AssociationController::class);
route::apiResource('families',FamilyController::class);
route::apiResource('debits',DebitController::class);
route::apiResource('activities',ActivityController::class);
route::apiResource('associates',AssociateController::class);
route::apiResource('assistences',AssistenceController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


