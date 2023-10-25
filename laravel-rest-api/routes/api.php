<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ResetController;
use Illuminate\Support\Facades\Route;

 //Reset state before starting test
 //POST /reset
 //200

Route::post('/reset', [ResetController::class , 'reset']);

Route::get('/balance', [BalanceController::class, 'show']);

Route::post('/event', [EventController::class, 'store']);
