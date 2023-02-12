<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;

class VerificationController extends Controller
{
    public function index()
    {
        return view('backend.agents.account_verification');
    }
}
