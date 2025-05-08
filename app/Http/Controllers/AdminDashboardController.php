<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function adminDashboard() {
        $users = User::where('role', 'client')->count();
        $admins = User::where('role', 'admin')->count();
        
        // $user = User::where('role', 'admin')->first();
        $user = Auth::User();
        return view ('dashboard.adminDashboard', compact('user', 'users', 'admins')  );
    }

}
