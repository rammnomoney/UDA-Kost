<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;

class KosController extends Controller
{
    //
    public function index()
    {
        $koss = Kos::select('id', 'nama', 'alamat', 'price', 'list1', 'list2', 'list3', 'gambar')
        ->inRandomOrder()
        ->take(10)
        ->get();

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
