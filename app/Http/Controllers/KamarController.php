<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    //
    public function kost()
    {
        $koss = Kos::all();
        
        return view('index', compact('koss'));
    }

    public function show($id)
    {
        //$kamar = Kamar::findOrFail($id);
        $kamar = Kamar::all();
        if (!$kamar) {
            abort(404, 'Kamar tidak ditemukan.');
        }
        
        return view('fronten/house/show', compact('kamar'));
        // if (!$id) {
        //     return "Parameter ID tidak diberikan.";
        // }
        //$kamar = Kamar::findOrFail($id);

        // $kamar = Kamar::where('id', $kamar)->first();

        //$gambar = $kamar->gambar;
    
        //return view('fronten/house/show', ['kamar' => $kamar]); //compact('kamars')
    }
}
