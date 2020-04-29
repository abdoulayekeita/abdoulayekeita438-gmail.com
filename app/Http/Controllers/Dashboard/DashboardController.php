<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {

        if (auth()->user()->profile->role=="Particulier"){

            return view('dashboard.dashboard_compte_particulier');
        }elseif (auth()->user()->profile->role=="Busness"){

            return view('dashboard.dashboard_compte_busness');
        }else{

        }
    }
}
