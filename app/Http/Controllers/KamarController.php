<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    //
    public function index()
    {
        $kamar = Kamar::all();
        //$kamar = Kamar::findOrFail($id);
        return view('fronten/house/show', compact('kamar'));
    }

    public function show($id)
    {
        //$kamar = Kamar::all();
        $kamar = Kamar::findOrFail($id);

        // if (!$kamar) {
        //     abort(404, 'Kamar tidak ditemukan.');
        // }

        //$gambar = $kamar->gambar;
    
        return redirect('fronten/house/show', compact('kamar'));
    }
}
