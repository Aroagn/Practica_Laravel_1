<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::prefix('/students')->controller(StudentsController::class)->group(function () {
    Route::get('', 'getAll');
    Route::middleware('validate.id')->get('{id}', 'getById');
    Route::post('', 'create');
    Route::middleware('validate.id')->delete('{id}', 'delete');
    Route::middleware('validate.id')->put('{id}', 'update');
});
