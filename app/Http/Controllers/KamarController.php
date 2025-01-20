<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use App\Models\Kamar;
use App\Models\KamarGambar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    //Kos
    public function kost()
    {
        $koss = Kos::all();
        
        return view('index', compact('koss'));
    }

    public function show(string $id)
    {
        $kamar = Kamar::findOrFail($id);

        //$kamarGambar = KamarGambar::where('kamar_id',$id)->get();

        if (!$kamar) {
            abort(404, 'Kamar tidak ditemukan.');
        }
        
        return view('fronten/house/show', compact('kamar'));
    }
}
