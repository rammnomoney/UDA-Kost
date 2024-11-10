<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     Auth::shouldUse('pemilik');
    // }

    public function index(){
        $title = 'register';
        return view('admins/auth/register', compact('title'));
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:pemiliks,email',
            'alamat' => 'required',
            'password' => 'required',
        ], [
            'nama.required' => 'Kolom Nama tidak boleh kosong !',
            'email.required' => 'Kolom Email tidak boleh kosong !',
            'email.unique' => 'Email sudah digunakan !',
            'alamat' => 'Alamat diperlukan !',
            'password.required' => 'Kolom password tidak boleh kosong !',
        ]);

        $pemilik = new Pemilik();

        $pemilik->nama = $request->nama;
        $pemilik->email = $request->email;
        $pemilik->alamat = $request->alamat;
        $pemilik->password = Hash::make($request->password);

        if ($pemilik->save() ) {
            return redirect('/login')->with([
                'notifikasi' => 'Register berhasil !',
                'type' => 'success'
            ]);

        } else {
            return redirect()->back()->with([
                'notifikasi' => 'Register gagal, Coba Kembali !',
                'type' => 'error'
            ]);
        
        }
    }


    public function login(){
        return view('admins/auth/login');
    }

    public function login_autentik(Request $request){
		$validateData = $request->validate([
            'email' => 'required|exists:pemiliks,email',
            'password' => 'required',
        ], [
            'email.required' => 'Kolom Email tidak boleh kosong !',
            'email.exists' => 'Email atau Password salah !',
            'password.required' => 'Kolom password tidak boleh kosong !',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect('welcome')->with([
                'notifikasi' => 'Login berhasil !',
                'type' => 'success'
            ]);

        } else {
            return redirect()->back()->withErrors([
                'notifikasi' => 'Login gagal, E-Mail atau Password salah!',
                'type' => 'error'
            ])->withInput($request->except('password'));
        }
    }

    public function logout(){
        Auth::logout();

        // Session::forget('data_user');
        return redirect('/login');
    }

}
