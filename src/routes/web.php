<?php

use Illuminate\Support\Facades\Route;
use Islam2718\HelloBangladesh\Http\Controllers\HelloBangladeshController;

Route::get('/hello-bangladesh', [HelloBangladeshController::class, 'index']);
