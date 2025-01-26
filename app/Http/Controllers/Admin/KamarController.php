<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kos;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class KamarController extends Controller
{
    public function index($id)
    {
        $kos = Kos::findOrFail($id);

        $kamar = Kamar::with('kos')->where('kos_id', $id)->paginate(6);

        if (!$kamar) {
                Session::flash('search', 'gagal');
                Session::flash('pesan', 'Data tidak ditemukan');
        }
            
        return view('admins.kamar.listKamar', compact('kos', 'kamar'))->with('id', $id);
    }

    public function create($id)
    {
        // $koss = Kos::get(['id','nama']);
        // return view('admins.kamar.addKamar', compact('koss'));
        
        $kos = Kos::select('id', 'nama')->where('id', $id)->first();

        return view('admins.kamar.addKamar', ['kos' => $kos, 'id' => $id]);
    }

    public function store(Request $request, $id)
    {
            $request->validate([
                'nama' => 'required|string|max:30',
                'alamat' => 'required|max:255',
                'price' => 'required|numeric|min:0',
                'list' => 'required|array',
                'list.*' => 'string',
                'deskripsi' => 'required|max:255',
                'status' => 'required',
            ], [
                'nama.required' => 'Nama Wajib Diisi',
                'nama.max' => 'Nama Maksimal 30 Karakter',
                'alamat.required' => 'Alamat Wajib Diisi',
                'price.required' => 'Harga Wajib Diisi',
                'list.required' => 'List Wajib Diisi',
                'deskripsi.required' => 'Deskripsi Wajib Diisi',
                'status.required' => 'Status Wajib Diisi',
            ]);
            
            $kamar = new kamar;
            $kamar->nama = $request->nama;
            $kamar->alamat = $request->alamat;
            $kamar->kodepos = $request->kodepos;
            $kamar->price = $request->price;
            $kamar->list = json_encode($request->list);
            $kamar->deskripsi = $request->deskripsi;
            $kamar->judulfitur = $request->judulfitur;
            $kamar->fitur = $request->fitur;
            $kamar->status = $request->status;
            $kamar->kos_id = $id;

            $kamar->save();

            //Input gambar 1
            // if ($request->hasFile('gambar')) {
            //     $gambar = $request->file('gambar');
            //     $namaFile = $request->nama . '_' . time() . '.' . $gambar->getClientOriginalExtension();
            //     $gambar->storeAs('public/gambar', $namaFile);
            //     $kamar->gambar = $namaFile;
            // }
            // $namaFile = null;

            //
            // if ($request->hasFile('photos')) {
            //     $files = $request->file('photos');
            //     foreach($files as $file){
            //         $filename = $file->getClientOriginalName();
            //         $extension = $file->getClientOriginalExtension();
            //         $fileName = str::random(5)."-".date('his')."-".str::random(3).".".$extension;
            //         $gambar = 'public/gambar'.'/';
            //         $file->move($gambar, $fileName);
            //         }
            //     }

        if ($kamar) {
        Session::flash('insert', 'sukses');
        Session::flash('pesan', 'Data Berhasil Ditambahkan');
        }

        return redirect('/kamar/{{ $id }}');
        // return redirect()->back()->with('insert', 'Berhasil!');
    }

    public function edit($id)
    {
        // $koss = Kos::get(['id','nama']);

        // return view('admins.kamar.editKamar', compact('koss'));
        
        $kamar = Kamar::with('kos')->findOrFail($id);
        
        $kos = Kos::paginate(6);
        return view('admins.kamar.editKamar', ['kamar' => $kamar], ['kos' => $kos]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'list' => 'required|array',
            'list.*' => 'string',
        ]);

        $kamar = Kamar::findOrFail($id);

        $kamar->nama = $request->nama;
        $kamar->alamat = $request->alamat;
        $kamar->kodepos = $request->kodepos;
        $kamar->price = $request->price;
        $kamar->list = $request->list;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->judulfitur = $request->judulfitur;
        $kamar->fitur = $request->fitur;
        $kamar->status = $request->status;
        $kamar->kos_id = $request->kos_id;

        //tambah gambar biasa
        // if ($request->hasFile('gambar')) {
        //     if ($kamar->gambar && Storage::disk('public')->exists('gambar/' . $kamar->gambar)) {
        //         Storage::disk('public')->delete('gambar/' . $kamar->gambar);
        //     }

        //     $gambar = $request->file('gambar');
        //     $extension = $gambar->getClientOriginalExtension();
        //     $namaFile = $request->nama . '_' . time() . '.' . $extension;
        //     $gambar->storeAs('gambar', $namaFile, 'public');

        //     $kamar->gambar = $namaFile;
        // }

        // 
        // if ($request->hasFile('gambar')) {
        //         foreach ($request->file('gambar') as $file) {

        //             $namaFile = $request->nama . '_' . time() . '_' . $file->getClientOriginalName();
        //             $file->storeAs('gambar', $namaFile, 'public');
                  
        //         }
        // }

        $kamar->save();

        if ($kamar) {
            Session::flash('update', 'suskes');
            Session::flash('pesan', 'Data '  . $kamar->nama . ' berhasil Diedit');
        }

        return redirect('/kamar/{{ $id }}');
        // return redirect()->back()->with('update', 'Diperbarui');
    }
    
    public function destroy($id)
    {
        try {
            $kamar = Kamar::findOrFail($id);
    
            if ($kamar->gambar && Storage::disk('public')->exists('gambar/' . $kamar->gambar)) {
                Storage::disk('public')->delete('gambar/' . $kamar->gambar);
            }
    
            $kamar->delete();
    
            Session::flash('delete', 'sukses');
            Session::flash('pesan', 'Data ' . $kamar->nama . ' Berhasil Dihapus ');

        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1451) {
                Session::flash('delete', 'gagal');
                Session::flash('pesan', 'Data ' . $kamar->nama . ' Tidak bisa dihapus karena masih dalam masa sewa ');
            }
        }
    
        return redirect('/kamar/{{ $id }}');
        // return redirect()->back()->with('delete', 'Dihapus!');
    }

    public function cari(Request $request, Kos $kos)
    {
        $cariKamar = $request->cariKamar;

        if (isset($cariKamar)) {
            $kamar = Kamar::where('nama', 'like', "%" . $cariKamar . "%")
                ->where('kos_id', $kos->id)
                ->orWhere('status', 'like', "%" . $cariKamar . "%")
                ->paginate(6);
        } else {
            return $this->index($kos->id);
        }

        return view('admins.kamar.listKamar', compact('kos', 'kamar', 'cariKamar'))->with('pesan', 'Data tidak ditemukan');
    }
}
