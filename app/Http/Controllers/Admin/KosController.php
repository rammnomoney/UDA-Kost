<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kos;
use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class KosController extends Controller
{
    public function index()
    {
        $kos = Kos::with('pemilik')->where('pemilik_id')->paginate(6);

        return view('admins.kos.listKos', compact('kos'))->with('pemilik_id');
    }

    public function create()
    {
        // $pemilik = Pemilik::get(['id','nama']);
        $pemilik = Pemilik::select('id', 'nama')->where('id')->first();
        return view('admins.kos.addKos', ['pemilik' => $pemilik, 'id']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:30',
            'alamat' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'list1' => 'required|string|min:1',
            'list2' => 'required|string|min:1',
            'list3' => 'required|string|min:1',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ], [
            'nama.required' => 'Nama Wajib Diisi',
            'nama.max' => 'Nama Maksimal 30 Karakter',
            'alamat.required' => 'Alamat Wajib Diisi',
            'list.required' => 'List Wajib Diisi',
            'price.required' => 'Harga Wajib Diisi',
        ]);
        
        // Input harga .  titik
        //$price = str_replace('.', '', $request->input('price'));

        $imageName = time() . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->move(public_path('storage/gambar'), $imageName);

        $kos = new Kos;
        $kos->nama = $request->nama;
        $kos->alamat = $request->alamat;
        $kos->list1 = $request->list1;
        $kos->list2 = $request->list2;
        $kos->list3 = $request->list3;
        $kos->price = $request->price;
        $kos->pemilik_id = $request->pemilik_id;
        $kos->gambar = $imageName;
        
        // $gambar = $request->file('gambar');
        // $extension = $gambar->getClientOriginalExtension();
        // $namaFile = $request->nama .  '_' . time() . '.' . $extension;
        
        // $gambar->storeAs('public/gambar', $namaFile);
        // $kos->gambar = $namaFile;
        $kos->save();
            

        if ($kos) {
            Session::flash('insert', 'sukses');
            Session::flash('pesan', 'Data Berhasil Ditambahkan');
        }

        return redirect('/kos');
    }

    public function edit(Kos $kos, $id)
    {
        $kos = Kos::with('pemilik')->findOrFail($id);

        return view('admins.kos.editKos', compact('kos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $kos = Kos::findOrFail($id);
        $kos->nama = $request->nama;
        $kos->alamat = $request->alamat;
        $kos->list1 = $request->list1;
        $kos->list2 = $request->list2;
        $kos->list3 = $request->list3;
        $kos->price = $request->price;
        $kos->pemilik_id = $request->pemilik_id;
        
        if ($request->hasFile('gambar')) {
            if ($kos->gambar && Storage::exists('public/gambar/' . $kos->gambar)) {
                Storage::delete('public/gambar/' . $kos->gambar);
            }

            $gambar = $request->file('gambar');
            $namaFile = $request->nama . '_' . time() . '.' . $gambar->getClientOriginalExtension();
            
            $gambar->storeAs('public/gambar', $namaFile);
            $kos->gambar = $namaFile;
        }

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
                Session::flash('pesan', 'Data ' . $kos->nama . ' Berhasil Dihapus ');
            }
        } catch (\Illuminate\Database\QueryException $e) {
            $error = $e->errorInfo[1];
            if ($error == 1451) {
                Session::flash('delete', 'gagal');
                Session::flash('pesan', 'Data ' . $kos->nama . ' Tidak bisa dihapus karena terdapat data kamar di dalamnya ');
            }
        }

        return redirect('/kos');
    }

    public function cari(Request $request)
    {
        $cariKos = $request->cariKos;

        if (isset($request->cariKos)) {
            $kos = Kos::where('nama', 'like', "%" . $cariKos . "%")
                ->orWhere('alamat', 'like', "%" . $cariKos . "%")
                ->paginate(6);
        } else {
            $kos = Kos::paginate(6);
        }

        return view('admins.kos.listKos', compact('kos', 'cariKos'));
    }
}
