<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PenyewaController extends Controller
{
    public function index()
    {
        $penyewa = Penyewa::paginate(6);
        return view('admins.penyewa.listPenyewa', compact('penyewa'));
    }

    public function create()
    {
        return view('admins.penyewa.addPenyewa');
    }
    public function store(Request $request)
    {

        $request->validate([
            'nik' => 'required|int|digits-between:1,16',
            'nama' => 'required|max:30',
            'email' => 'required|max:50|email:dns|unique:penyewa',
            'alamat' => 'required|max:50',
            'no_telp' => 'required|digits-between:1,13',
        ], [
            'nik.required' => 'Nik Wajib Diisi',
            'nama.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.unique' => 'Email Sudah Terdaftar',
            'alamat.required' => 'Alamat Wajib Diisi',
            'no_telp.required' => 'NO Telepon Wajib Diisi',
            'nama.max' => 'Nama Maksimal 30 Karakter',
            'alamat.max' => 'Alamat Maksimal 50 Karakter',
        ]);

        $penyewa = new Penyewa;
        $penyewa->nik = $request->nik;
        $penyewa->nama = $request->nama;
        $penyewa->email = $request->email;
        $penyewa->alamat = $request->alamat;
        $penyewa->no_telp = $request->no_telp;
        $penyewa->save();

        if ($penyewa) {
            Session::flash('insert', 'suskes');
            Session::flash('pesan', 'Data Berhasil Ditambahkan');
        }

        return redirect('/penyewa');
    }

    public function edit($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('admins.penyewa.editPenyewa', ['penyewa' => $penyewa]);
    }

     public function update(Request $request, $id)
     {
         $penyewa = Penyewa::findOrFail($id);
         $penyewa->nik = $request->nik;
         $penyewa->nama = $request->nama;
         $penyewa->email = $request->email;
         $penyewa->alamat = $request->alamat;
         $penyewa->no_telp = $request->no_telp;
         $penyewa->save();

         if ($penyewa) {
             Session::flash('update', 'suskes');
             Session::flash('pesan', 'Data ' . $penyewa->nama . ' Berhasil Diedit ');
         }
         return redirect('/penyewa');
     }

     public function destroy($id)
     {
         try {
             $penyewa = Penyewa::findOrFail($id);
             $penyewa->delete();

             if ($penyewa) {
                 Session::flash('delete', 'suskes');
                 Session::flash('pesan', 'Data ' . $penyewa->nama . ' Berhasil Dihapus');
             }
         } catch (\Illuminate\Database\QueryException $e) {
             $error = $e->errorInfo[1];
             if ($error == 1451) {
                 Session::flash('delete', 'gagal');
                 Session::flash('pesan', 'Data ' . $penyewa->nama . ' Tidak bisa dihapus karena masih dalam masa sewa');
             }
         }


        return redirect('/penyewa');
    }

    public function cari(Request $request)
    {
        $cariPenyewa = $request->cariPenyewa;

        if (isset($cariPenyewa)) {
            $penyewa = Penyewa::where('nama', 'like', "%" . $cariPenyewa . "%")
                ->orWhere('nik', 'like', "%" . $cariPenyewa . "%")
                ->orWhere('alamat', 'like', "%" . $cariPenyewa . "%")
                ->orWhere('email', 'like', "%" . $cariPenyewa . "%")
                ->paginate(5);
        } else {
            $penyewa = Penyewa::paginate(6);
        }

        return view('admins.penyewa.listPenyewa', compact('penyewa', 'cariPenyewa'));
    }
    
}
