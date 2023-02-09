<?php

use App\Http\Controllers\Agent\AgentController;
use Illuminate\Support\Facades\Route;

Route::middleware([])->prefix('agents')->group(function () {
    Route::get("/dashboard", [AgentController::class, 'index']);
    Route::get('/create-rider-form', [AgentController::class, 'create_rider_view']);
    Route::post('/rider-create', [AgentController::class, 'create_rider']);
});
