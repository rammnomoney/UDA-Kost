<?php

namespace App\Http\Controllers;

// use App\Models\Kos;
// use App\Models\Kamar;
// use App\Models\Penyewa;
//use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Session;


// class DashboardController extends Controller
// {

//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }

//     /**
//      * Show the application dashboard.
//      *
//      * @return \Illuminate\Contracts\Support\Renderable
//      */
//     public function index()
//     {
//         return view('admins.dashboard.dashboard', compact('users'));
//     }
//     function logout()
//     {
//         Auth::logout();
//         return redirect('/login');
//     }
        // if (Auth::check()) 
        //     return Redirect::route('/');

        // $title = 'halaman dashboard';
        // $belumLunas = DB::table('kontraks')
        //     ->where('status', 'belum lunas')
        //     ->count();
        // $sudahLunas = DB::table('kontraks')
        //     ->where('status', 'sudah lunas')
        //     ->count();
        // $kos = Kos::with('pemilik')->first();
        // $kamar = Kamar::with('kos')
        //     ->count();
        // $penyewa = Penyewa::all()->count();
        // $pemilik = Session::get('data_user');
        // // $emailPemilik = $req->session()->get('data_user')->email;
        // return view('dashboard/dashboard', compact('kamar', 'penyewa', 'kos', 'belumLunas', 'sudahLunas', 'title', 'pemilik'));
        // return view('dashboard/dashboard', compact('kamar', 'penyewa', 'kos', 'belumLunas', 'sudahLunas', 'title', 'pemilik'));
//}
