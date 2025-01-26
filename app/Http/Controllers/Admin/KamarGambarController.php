<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kamar;
use App\Models\KamarGambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KamarGambarController extends Controller
{
    public function index() 
    {
        return view('admins.kamar-gambar.listKamar-gambar');
    }
    
    public function create(int $kamarId)
    {
        $kamar = Kamar::findorFail($kamarId);
    
        // $kamargambar = KamarGambar::with('kamar')->where('kamar_id', $kamarId)->paginate(6);
        $kamarGambar = KamarGambar::where('kamar_id', $kamarId)->get();
        return redirect('admins.kamar-gambar.listKamar-gambar', compact('kamar','kamarGambar'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:10',
            'gambar.*' => 'required|image|mimes:jpg,jpeg,png|max:10240'
        ]);

        if($request->validated()){
            $image = $request->file('gambar')->store(
                'kamarIMG/gambar', 'public'
            );

            KamarGambar::create($request->except('gambar') + ['gambar' => $image]);
        }

        return redirect()->back()->with('status', 'Gambar berhasil dikirim');
    }

    public function destroy(int $kamarImageId)
    {
        $kamarImage = KamarGambar::findorFail($kamarImageId);

        if(File::exists($kamarImage->gambar)){
            File::delete($kamarImage->gambar);
            
            $kamarImage->delete();
        }

        return redirect()->back()->with('status', 'Gambar dihapus');
    }

}