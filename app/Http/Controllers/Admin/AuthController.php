?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Session;
//use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    
    public function index(){
        $title = 'register';
        return view('admins.auth.register', compact('title'));
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
        return view('admins.auth.login');
    }

    public function login_autentik(Request $request){
		$credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Ambil user yang terautentikasi
        $user = Auth::user();

        // Periksa peran user
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('/login');
        }
    } else {
        return back()->withErrors(['message' => 'Invalid credentials']);
    }

    }

    public function logout(){
        Auth::logout();

        // Session::forget('data_user');
        return redirect('/login');
    }

}
