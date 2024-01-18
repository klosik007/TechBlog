<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        switch (auth()->user->role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
                break;

            default:
                return redirect()->route('login');
                break;
        }
    }
}
