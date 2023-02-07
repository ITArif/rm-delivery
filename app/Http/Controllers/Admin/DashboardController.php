<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.dashboard.dashboard');
    }

    public function allClient(){
        $allClients=User::whereNotIn('id',[1])->get();
        return view('backend.clients.all_client',compact('allClients'));
    }
}
