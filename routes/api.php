<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded within the "api" middleware group which includes
| the middleware most often needed by APIs. Build something great!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

Route::prefix('v1')->group(base_path('routes/api_v1.php'));
Route::prefix('v2')->group(base_path('routes/api_v2.php'));
