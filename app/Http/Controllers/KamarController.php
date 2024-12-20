<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    //
    // public function index()
    // {
    //     //$kamar = Kamar::all();
    //     //$kamar = Kamar::findOrFail($id);
    //     return view('fronten/house/show');
    // }

    public function show($id)
    {
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
