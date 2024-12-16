<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class KamarController extends Controller
{
    public function index()
    {
        //$title = 'Halaman List Kamar';
        //$kos = Kos::findOrFail($id);
        $kamar = Kamar::paginate(5);

        // if (!$kamar) {
        //     Session::flash('search', 'gagal');
        //     Session::flash('pesan', 'Data tidak ditemukan');
        // }

        return view('admins.kamar.listKamar', compact('kamar'));
    }

    public function create()
    {
        // $kos = Kos::select('nama')->where($id)->first();
        // return view('admins.kamar.addKamar', ['kos' => $kos], ['id' => $id]);
        //$kos = Kos::select('nama')->where('id', $id)->first(); // Menentukan kolom id
        return view('admins.kamar.addKamar');
        // , [
        //     'kos' => $kos,
        //     'id' => $id
        // ]
    }

    public function store(Request $request)
    {
            $request->validate([
                'nama' => 'required|string|max:30',
                'alamat' => 'required|max:255',
                'price' => 'required|numeric|min:0',
                'list' => 'nullable|array',
                //'list' => 'required',
                'deskripsi' => 'required|max:255',
                'fitur' => 'required',
                'status' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            ], [
                'nama.required' => 'Nama Wajib Diisi',
                'nama.max' => 'Nama Maksimal 30 Karakter',
                'alamat.required' => 'Alamat Wajib Diisi',
                'price.required' => 'Harga Wajib Diisi',
                'list.required' => 'List Wajib Diisi',
                'deskripsi.required' => 'Deskripsi Wajib Diisi',
                'fitur.required' => 'Fitur Wajib Diisi',
                'status.required' => 'Status Wajib Diisi',
            ]);
            
            $kamar = new kamar;
            $kamar->nama = $request->nama;
            $kamar->alamat = $request->alamat;
            $kamar->price = $request->price;
            $kamar->list = json_encode($request->list);
            $kamar->deskripsi = $request->deskripsi;
            $kamar->fitur = $request->fitur;
            $kamar->status = $request->status;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = $request->nama . '_' . time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/gambar', $namaFile);
            $kamar->gambar = $namaFile;
        }

        $kamar->save();

        if ($kamar) {
        Session::flash('insert', 'sukses');
        Session::flash('pesan', 'Data Berhasil Ditambahkan');
        }

        return redirect('/kos');
        // $request->validate([
        //     'nama' => 'required|string|max:30',
        //     'alamat' => 'required|max:255',
        //     'price' => 'required|numeric|min:0',
        //     'list' => 'required',
        //     'deskripsi' => 'required|max:255',
        //     'fitur' => 'required',
        //     'status' => 'required',
        //     'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        // ], [
        //     'nama.required' => 'Nama Wajib Diisi',
        //     'nama.max' => 'Nama Maksimal 30 Karakter',
        //     'alamat.required' => 'Alamat Wajib Diisi',
        //     'price.required' => 'Harga Wajib Diisi',
        //     'list.required' => 'List Wajib Diisi',
        //     'deskripsi.required' => 'Deskripsi Wajib Diisi',
        //     'fitur.required' => 'Fitur Wajib Diisi',
        //     'status.required' => 'Status Wajib Diisi',
        // ]);

        // $kamar = new kamar;
        // $kamar->nama = $request->nama;
        // $kamar->alamat = $request->alamat;
        // $kamar->price = $request->price;
        // $kamar->list = $request->list;
        // $kamar->deskripsi = $request->deskripsi;
        // $kamar->fitur = $request->fitur;
        // $kamar->status = $request->status;
        // //$kamar->id = $id;
        // $namaFile = null;

        // // tambah gambar
        // if ($request->hasFile('gambar')) {
        //     $gambar = $request->file('gambar');
        //     if ($gambar) {
        //         $extension = $gambar->getClientOriginalExtension();
        //         $namaFile = $request->nama .  '_' . time() . '.' . $extension; // buat nama unique
        //         $gambar->storeAs('public/gambar', $namaFile);
        //     }
        // }
        // $kamar->gambar = $namaFile;
        // $kamar->save();

        // if ($kamar) {
        //     Session::flash('insert', 'suskes');
        //     Session::flash('pesan', 'Data Berhasil Ditambahkan');
        // }

        // return redirect('/kamar/' . $id);
    }

    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('admins.kamar.editKamar', compact('kamar'));
    }

    public function update(Request $request, $id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->nama = $request->nama;
        $kamar->alamat = $request->alamat;
        $kamar->price = $request->price;
        $kamar->list = $request->list;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->fitur = $request->fitur;
        $kamar->status = $request->status;
        //$kamar->id = $request->id;
        $namaFile = null;

        // tambah gambar
        if ($request->hasFile('gambar')) {
            if ($kamar->gambar && Storage::disk('public')->exists('gambar/' . $kamar->gambar)) {
                Storage::disk('public')->delete('gambar/' . $kamar->gambar);
            }
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalExtension();
            $namaFile = $request->nama . '_' . time() . '.' . $extension;
            $gambar->storeAs('public/gambar', $namaFile);

            $kamar->gambar = $namaFile;
        }

        // if ($request->hasFile('gambar')) {
        //     $gambar = $request->file('gambar');
        //     if ($gambar) {
        //         $extension = $gambar->getClientOriginalExtension();
        //         $namaFile = $request->nama .  '_' . time() . '.' . $extension; // buat nama unique
        //         $gambar->storeAs('public/gambar', $namaFile);
        //     }
        // }

        $kamar->save();

        if ($kamar) {
            Session::flash('update', 'suskes');
            Session::flash('pesan', 'Data '  . $kamar->nama . ' berhasil Diedit');
        }
        return redirect('/kos');
    }
    
    public function destroy($id)
    {

        // try {
        //     $kamar = Kamar::findOrFail($id);
        //     $kamar->delete();

        //     if ($kamar) {
        //         Session::flash('delete', 'suskes');
        //         Session::flash('pesan', 'Data ' . $kamar->nama . ' berhasil dihapus');
        //     }
        // } catch (\Illuminate\Database\QueryException $e) {
        //     $error = $e->errorInfo[1];
        //     if ($error == 1451) {
        //         Session::flash('delete', 'gagal');
        //         Session::flash('pesan', 'Data ' . $kamar->nama . ' tidak bisa dihapus karena masih dalam masa sewa');
        //     }
        // }
        try {
            $kamar = Kamar::findOrFail($id);
    
            if ($kamar->gambar && Storage::disk('public')->exists('gambar/' . $kamar->gambar)) {
                Storage::disk('public')->delete('gambar/' . $kamar->gambar);
            }
    
            $kamar->delete();
    
            Session::flash('delete', 'sukses');
            Session::flash('pesan', 'Data ' . $kamar->nama . ' berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1451) {
                Session::flash('delete', 'gagal');
                Session::flash('pesan', 'Data ' . $kamar->nama . ' tidak bisa dihapus karena masih dalam masa sewa');
            }
        }
    
        return redirect('/kos');
    }

    // public function cari(Request $request, Kos $kos)
    // {
    //     $title = 'Halaman List Kamar';
    //     $cariKamar = $request->cariKamar;

    //     if (isset($cariKamar)) {
    //         $kamar = Kamar::where('nama', 'like', "%" . $cariKamar . "%")
    //             ->where('kos_id', $kos->id)
    //             ->orWhere('status', 'like', "%" . $cariKamar . "%")
    //             ->paginate(6);
    //     } else {
    //         return $this->index($kos->id);
    //     }

    //     return view('admins.kamar.listKamar', compact('kamar', 'kos', 'cariKamar', 'title'))->with('pesan', 'Data tidak ditemukan');
    // }
}
