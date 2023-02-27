<?php

namespace App\Http\Controllers;

use App\Models\{Regional,User};
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'desc' => 'MEDIA PONDOK JATIM',
            'regional' => Regional::latest()->get(),
            'user' => User::latest()->get(),
        ]);
    }
}
