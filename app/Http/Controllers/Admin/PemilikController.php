<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PemilikController extends Controller
{
    public function index()
    {
        $pemilik = Pemilik::all();
        return view('admins.pemilik.listPemilik', compact('pemilik'));
    }

    public function create()
    {
        return view('admins.pemilik.addPemilik');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:30',
            'email' => 'required|max:50|email:dns|unique:pemiliks',
            'alamat' => 'required|max:50',
            'password' => 'required',
        ], [
            'nama.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Email Tidak Valid',
            'email.unique' => 'Email Sudah Terdaftar',
            'alamat.required' => 'Alamat Wajib Diisi',
            'nama.max' => 'Nama Maksimal 30 Karakter',
            'email.max' => 'Email Maksimal 50 Karakter',
            'alamat.max' => 'Alamat Maksimal 50 Karakter',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $pemilik = new pemilik;
        $pemilik->nama = $request->nama;
        $pemilik->email = $request->email;
        $pemilik->alamat = $request->alamat;
        $pemilik->password = password_hash($request->password, PASSWORD_BCRYPT);
        $pemilik->save();

        if ($pemilik) {
            Session::flash('insert', 'suskes');
            Session::flash('pesan', 'Data Berhasil Ditambahkan');
        }

        return redirect('/pemilik');

    }

    public function edit($id)
    {
        $pemilik = Pemilik::findOrFail($id);
        return view('admins.pemilik.editPemilik', ['pemilik' => $pemilik]);
    }

    public function update(Request $request, $id)
    {
        $pemilik = Pemilik::findOrFail($id);
        $pemilik->nama = $request->nama;
        $pemilik->email = $request->email;
        $pemilik->alamat = $request->alamat;
        $pemilik->password = password_hash($request->password, PASSWORD_BCRYPT);
        $pemilik->save();

        if ($pemilik) {
            Session::flash('update', 'suskes');
            Session::flash('pesan', 'Data ' . $pemilik->nama . ' berhasil Diedit');
        }
        return redirect('/pemilik');
    }
    public function destroy($id)
    {
        $pemilik = Pemilik::findOrFail($id);
        $pemilik->delete();

        if ($pemilik) {
            Session::flash('delete', 'suskes');
            Session::flash('pesan', 'Data ' . $pemilik->nama . ' Berhasil Dihapus');
        }

        return redirect('/pemilik');
    }

    public function cari(Request $request)
    {

        $request->validate([
            'cari' => 'required',
        ], [
            'cari.required' => 'Kolom pencarian wajib diisi',
        ]);

        $cari = $request->cari;

        $pemilik = DB::table('pemiliks')
            ->where('nama', 'like', "%" . $cari . "%")
            ->orWhere('email', 'like', "%" . $cari . "%")
            ->orWhere('alamat', 'like', "%" . $cari . "%")
            ->paginate(5);


        return view('admins.pemilik.listpemilik', compact('pemilik', 'cari'));
    }
    
}
