<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function clientDashboard() {

        $user = Auth::User();
        return view ('dashboard.clientDashboard', compact('user')  );
    }

   
}
