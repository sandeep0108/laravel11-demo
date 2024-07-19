<?php

use App\Http\Controllers\Api\V2\PostsController;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', PostsController::class);
