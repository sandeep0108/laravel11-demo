<?php

use App\Http\Controllers\Api\V1\PostsController;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', PostsController::class);
