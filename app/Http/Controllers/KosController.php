<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use App\Models\kamar;
use Illuminate\Http\Request;

class KosController extends Controller
{
    //
    public function index()
    {
        //$koss = Kos::orderBy('price', 'asc')->get();
        // Ambil data kos yang diurutkan berdasarkan harga terendah
        // $koss = Kos::orderBy('price', 'asc')->get();

        // Ambil data kos yang diurutkan berdasarkan harga tertinggi
        // $koss = Kos::orderBy('price', 'desc')->get();

        // Ambil data kos yang memiliki harga minimal 100000
        // $koss = Kos::where('price', '>=', 100000)->get();

        $koss = Kos::select('id', 'nama', 'alamat', 'price', 'list1', 'list2', 'list3', 'gambar')
        ->inRandomOrder()
        ->take(10) // Batasi jumlah kos yang diambil, misalnya 10
        ->get();

        // Kirim data ke view
        return view('welcome', compact('koss'));
    }

    // public function show()
    // {

    // }

    // public function store(BookingRequest $request)
    // {
    //     Booking::create($request->validated());

    //     return redirect()->back()->with([
    //         'message' => 'kami akan menghubungi anda secepatnya !',
    //         'alert-type' => 'success'
    //     ]);
    // }
}
