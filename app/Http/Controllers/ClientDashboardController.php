<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function clientDashboard() {

        $user = User::where('role', 'client')->first();
        return view ('dashboard.clientDashboard', compact('user')  );
    }
}
