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

    public function carikost(Request $request)
    {
        $keyword = $request->keyword;

        if (isset($request->keyword)) {
            $koss = Kos::where('nama', 'like', '%' . $keyword . '%')
                ->orWhere('price', 'like', '%' . $keyword . '%'); 
        } else {
            $koss = Kos::paginate(6);
        }    

        return view('index', compact('koss', 'keyword'));
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
