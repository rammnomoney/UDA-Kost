<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     Auth::shouldUse('pemilik');
    // }

    function index()
    {
        $title = 'register';
        return view('auth/register', compact('title'));
    }

    function store(Request $request){

        // $validateData = $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required|unique:users,email',
        //     'password' => 'required',
        //     'alamat' => 'required',
        // ], [
        //     'nama.required' => 'Kolom Nama tidak boleh kosong !',
        //     'email.required' => 'Kolom Email tidak boleh kosong !',
        //     'email.unique' => 'Email sudah digunakan !',
        //     'password.required' => 'Kolom password tidak boleh kosong !',
        //     'alamat' => 'Alamat diperlukan !',
        // ]);

        $pemilik = new Pemilik();
        $pemilik->nama = $request->nama;
        $pemilik->email = $request->email;
        $pemilik->alamat = $request->alamat;
        $pemilik->password = Hash::make($request->password);

        $pemilik->save();
        return redirect('/login');
    }

    // function login()
    // {
    //     return view('auth/login');
    // }

    // function login_autentik(Request $request)
    // {
	// 	if (!Auth::attempt($request->only('email', 'password'))) {
    //         return redirect()->back()->withErrors([
    //             'notifikasi' => 'Login gagal, E-Mail atau Password salah!',
    //             'type' => 'error'
    //         ])->withInput($request->except('password'));
    //     } 

	// 	$request->session()->put('data_user', Auth::user());
	// 	return redirect('/dashboard')->with([
    //         'notifikasi' => 'Login berhasil !',
    //         'type' => 'success'
    //     ]);
    // }

    // function logout()
    // {
    //     Auth::logout();
    //     Session::forget('data_user');
    //     return redirect('/login');
    // }
}
