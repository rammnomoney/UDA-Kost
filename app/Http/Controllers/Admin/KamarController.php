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
        $kamar = Kamar::paginate(6);

        // if (!$kamar) {
        //     Session::flash('search', 'gagal');
        //     Session::flash('pesan', 'Data tidak ditemukan');
        // }

        return view('admins.kamar.listKamar', compact('kamar'));
    }

    public function create()
    {
        return view('admins.kamar.addKamar');
    }

    public function store(Request $request)
    {
            $request->validate([
                'nama' => 'required|string|max:30',
                'alamat' => 'required|max:255',
                'price' => 'required|numeric|min:0',
                'list' => 'required|array',
                'list.*' => 'string',
                'deskripsi' => 'required|max:255',
                'status' => 'required',
                'gambar' => 'required|array|max:10',
                'gambar.*' => 'required|image|mimes:jpeg,png,jpg|max:10240',
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

            // Input gambar 1
        // if ($request->hasFile('gambar')) {
        //     $gambar = $request->file('gambar');

        //     $namaFile = $request->nama . '_' . time() . '.' . $gambar->getClientOriginalExtension();
        //     $gambar->storeAs('public/gambar', $namaFile);
        //     $kamar->gambar = $namaFile;
        // }

        // Input gambar 2
        if ($request->hasFile('gambar')) {
            $gambarFiles = $request->file('gambar');
            $gambarPaths = [];
        
            foreach ($gambarFiles as $gambar) {
                $namaFile = $request->nama . '_' . time() . '_' . $gambar->getClientOriginalName();
                $gambar->storeAs('public/gambar', $namaFile);
                $gambarPaths[] = $namaFile;
            }
        
            $kamar->gambar = json_encode($gambarPaths); // Save as JSON
        }
        

        $kamar->save();

        if ($kamar) {
        Session::flash('insert', 'sukses');
        Session::flash('pesan', 'Data Berhasil Ditambahkan');
        }

        return redirect('/kos');
    }

    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('admins.kamar.editKamar', compact('kamar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'list' => 'required|array',
            'list.*' => 'string',
            'gambar' => 'required|array|max:10',
            'gambar.*' => 'required|image|mimes:jpeg,png,jpg|max:10240',
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


        // Update jenis 2 ke 2
        if ($request->hasFile('gambar')) {
            // Delete old images
            if ($kamar->gambar) {
                foreach (json_decode($kamar->gambar) as $oldImage) {
                    if (Storage::exists('public/gambar/' . $oldImage)) {
                        Storage::delete('public/gambar/' . $oldImage);
                    }
                }
            }
        
            // Save new images
            $gambarFiles = $request->file('gambar');
            $gambarPaths = [];
        
            foreach ($gambarFiles as $gambar) {
                $namaFile = $request->nama . '_' . time() . '_' . $gambar->getClientOriginalName();
                $gambar->storeAs('public/gambar', $namaFile);
                $gambarPaths[] = $namaFile;
            }
        
            $kamar->gambar = json_encode($gambarPaths); // Save new filenames
        }
     
        // Update jenis 2 ke 1
        // if ($request->hasFile('gambar')) {
        //     foreach ($request->file('gambar') as $file) {
        //         $gambarName = time() . '-' . $file->getClientOriginalName();
        //         $file->move(public_path('gambar/'), $gambarName);
    
        //         // Save new file names in the database
        //         // Example: Assuming you store filenames in a JSON or related table
        //         $existingFiles = $kamar->gambar ? json_decode($kamar->gambar, true) : [];
        //         $existingFiles[] = $gambarName;
        //         $kamar->gambar = json_encode($existingFiles); // Save back to the model
        //     }
        // }
    
        // // Step 2: Handle file deletion (optional)
        // if ($request->has('remove_files')) {
        //     $filesToRemove = $request->input('remove_files'); // Array of file names to delete
        //     $existingFiles = $kamar->gambar ? json_decode($kamar->gambar, true) : [];
    
        //     foreach ($filesToRemove as $fileName) {
        //         // Remove from filesystem
        //         if (file_exists(public_path('gambar/' . $fileName))) {
        //             unlink(public_path('gambar/' . $fileName));
        //         }
    
        //         // Remove from the existing file array
        //         if (($key = array_search($fileName, $existingFiles)) !== false) {
        //             unset($existingFiles[$key]);
        //         }
        //     }
    
        //     // Update the record with the updated file list
        //     $kamar->gambar = json_encode(array_values($existingFiles));
        // }


        
        //tambah gambar biasa
        //$namaFile = null;
        // if ($request->hasFile('gambar')) {
        //     if ($kamar->gambar && Storage::disk('public')->exists('gambar/' . $kamar->gambar)) {
        //         Storage::disk('public')->delete('gambar/' . $kamar->gambar);
        //     }
        //     $gambar = $request->file('gambar');
        //     $extension = $gambar->getClientOriginalExtension();
        //     $namaFile = $request->nama . '_' . time() . '.' . $extension;
        //     $gambar->storeAs('public/gambar', $namaFile);

        //     $kamar->gambar = $namaFile;
        // }

        // if ($request->hasFile('gambar')) {
        //         foreach ($request->file('gambar') as $file) {
        //             $namaFile = time() . '-' . $file->getClientOriginalName();
        //             $file->move(public_path('gambar/'), $namaFile);
        //             // Store file names in a related table or an array field if needed
        //         }
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
