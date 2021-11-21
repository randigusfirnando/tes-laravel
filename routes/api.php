<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\KoliController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register',[UserController::class, 'store']);

Route::post('/putin',[KoliController::class, 'store']);

// Route::post('/takeout/{koli?}',[KoliController::class, 'update']);
Route::post('/takeout',[KoliController::class, 'update']);

Route::get('/koli/common',[KoliController::class, 'index']);
