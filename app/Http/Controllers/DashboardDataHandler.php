<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardDataHandler extends Controller
{
    public function index(){
        return view('components.dashboard-page',[
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
        ]);
    }
    public function nginx(){
        return view('components.layouts.navbar',[
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
        ]);
    }
}
