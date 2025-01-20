<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use App\Models\Kamar;
use App\Models\Penyewa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $title = 'halaman dashboard';
        $belumLunas = DB::table('kontraks')
            ->where('status', 'belum lunas')
            ->count();
        $sudahLunas = DB::table('kontraks')
            ->where('status', 'sudah lunas')
            ->count();
        $kos = Kos::all()->count();
        //$kos = Kos::with('kamar')->first();
        $kamar = Kamar::all()->count();
        $penyewa = Penyewa::all()->count();
        $pemilik = Session::get('data_user');
        
        return view('home', compact('penyewa', 'kos', 'belumLunas', 'sudahLunas', 'title', 'pemilik'));
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
