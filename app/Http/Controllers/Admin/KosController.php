<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Kos;
//use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KosController extends Controller
{
    public function index()
    {
        $kos = Kos::paginate(5);
        return view('admins.kos.listKos', compact('kos'));
    }

    public function create()
    {
        return view('admins.kos.addKos');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:30',
            'alamat' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ], [
            'nama.required' => 'Nama Wajib Diisi',
            'nama.max' => 'Nama Maksimal 30 Karakter',
            'alamat.required' => 'Alamat Wajib Diisi',
            'price.required' => 'Harga Wajib Diisi',
        ]);
        
        $kos = new Kos;
        $kos->nama = $request->nama;
        $kos->alamat = $request->alamat;
        $kos->price = $request->price;
        $namaFile = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            if ($gambar) {
                $extension = $gambar->getClientOriginalExtension();
                $namaFile = $request->nama .  '_' . time() . '.' . $extension; // buat nama unique
                $gambar->storeAs('public/gambar', $namaFile);
            }
        }

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $extension = $image->getClientOriginalExtension();
        //     $namaFile = $request->nama .  '_' . time() . '.' . $extension; // buat nama unique
        //     $image->storeAs('gambar/', $namaFile, 'public');
        // }

        // $kos = Kos::create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'price' => $request->price,
        //     'image' => $request->$namaFile,
        // ]);
        $kos->gambar = $namaFile;

        $kos->save();

        if ($kos) {
            Session::flash('insert', 'suskes');
            Session::flash('pesan', 'Data Berhasil Ditambahkan');
        }

        return redirect('/kos');
    }

    public function edit($id)
    {
        $kos = Kos::findOrFail($id);
        return view('admins.kos.editKos', compact('kos'));
    }

    public function update(Request $request, $id)
    {
        $kos = Kos::findOrFail($id);
        $kos->nama = $request->nama;
        $kos->alamat = $request->alamat;
        $kos->price = $request->price;
        
        $namaFile = null;

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('images', 'public');
        //     $kos->image = $imagePath;
        // }

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            if ($gambar) {
                $extension = $gambar->getClientOriginalExtension();
                $namaFile = $request->nama .  '_' . time() . '.' . $extension; // buat nama unique
                $gambar->storeAs('public/gambar', $namaFile);
            }
        }

        $kos->gambar = $namaFile;

        $kos->save();

        if ($kos) {
            Session::flash('update', 'sukses');
            Session::flash('pesan', 'Data ' . $kos->nama . ' berhasil Diedit');
        }

        return redirect('/kos');
    }

    public function destroy($id)
    {
        try {
            $kos = Kos::findOrFail($id);
            $kos->delete();

            if ($kos) {
                Session::flash('delete', 'suskes');
                Session::flash('pesan', 'Data ' . $kos->nama . ' berhasil dihapus');
            }
        } catch (\Illuminate\Database\QueryException $e) {
            $error = $e->errorInfo[1];
            if ($error == 1451) {
                Session::flash('delete', 'gagal');
                Session::flash('pesan', 'Data ' . $kos->nama . ' - ');
            }
        }

        return redirect('/kos');
    }

    // public function cari(Request $request)
    // {
    //     $title = 'Halaman List Kos';
    //     $cariKos = $request->cariKos;

    //     if (isset($request->cariKos)) {
    //         $kos = Kos::where('nama', 'like', "%" . $cariKos . "%")
    //             ->orWhere('alamat', 'like', "%" . $cariKos . "%")
    //             ->paginate(6);
    //     } else {
    //         $kos = Kos::paginate(6);
    //     }

    //     return view('admins.kos.listKos', compact('kos', 'title', 'cariKos'));
    // }
}
