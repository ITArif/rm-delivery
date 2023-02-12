<?php

use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Agent\VerificationController;
use App\Http\Controllers\Mail\agent_mail;
use Illuminate\Support\Facades\Route;

Route::middleware([])->prefix('agents')->group(function () {
    Route::get("/dashboard", [AgentController::class, 'index']);
    Route::get('/create-rider-form', [AgentController::class, 'create_rider_view']);
    Route::post('/rider-create', [AgentController::class, 'create_rider']);
    Route::get('/send_mail', [agent_mail::class, 'send_email']);
    Route::get('/test', [AgentController::class, 'testing']);
});

// agent verification route section
Route::get('verification/agents', [VerificationController::class, 'index']);
