<?php

namespace App\Http\Controllers;

use App\Models\Kos;
//use App\Models\Penyewa;
use Illuminate\Http\Request;

class KosController extends Controller
{
    //
    public function index(Request $request)
    {
        $koss = Kos::all();
        return view('index', compact('koss'));
    }

    public function show()
    {
        return view('fronten.house.show');
    }

    // public function store(BookingRequest $request)
    // {
    //     Booking::create($request->validated());

    //     return redirect()->back()->with([
    //         'message' => 'kami akan menghubungi anda secepatnya !',
    //         'alert-type' => 'success'
    //     ]);
    // }
}
