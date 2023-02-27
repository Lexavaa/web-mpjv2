<?php

namespace App\Http\Controllers;

use App\Models\{Profile, Regional, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data_jumlah_kru = Profile::select(DB::raw("CAST(SUM(jumlah_kru) as int) as data_jumlah_kru"))
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('data_jumlah_kru');

        $month = Profile::select(DB::raw("MONTHNAME(created_at) as month"))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('month');

        return view('dashboard.index', [
            'regional' => Regional::latest()->get(),
            'user' => User::latest()->with('khodim')->get(),
            'profiles' => Profile::latest()->with(['user', 'regional'])->get(),
            'notif' => User::where('isActive', 0)->count(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
            'khodim' => User::where('khodims_id', 1)->orWhere('khodims_id', 2)->orWhere('khodims_id', 3)->orWhere('khodims_id', 4)->count()
        ], compact(['data_jumlah_kru', 'month']));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
