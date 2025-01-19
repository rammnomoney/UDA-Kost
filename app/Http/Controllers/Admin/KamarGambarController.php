<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kamar;
use App\Models\KamarGambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KamarGambarController extends Controller
{
    public function index(int $kamarId) 
    {
        $kamar = Kamar::findorFail($kamarId);

        $kamarGambar = KamarGambar::where('kamar_id',$kamarId)->get();
        return view('admins.kamar-gambar.index', compact('kamar','kamarGambar'));
    }

    public function upload(Request $request, int $kamarId)
    {
        $request->validate([
            'gambar' => 'required|max:10',
            'gambar.*' => 'required|image|mimes:jpg,jpeg,png|max:10240'
        ]);

       $kamar = Kamar::findorFail($kamarId);
 
        $imageData = [];
        if($files = $request->file('gambar')){

            foreach($files as $key => $file){

                $extension = $file->getClientOriginalExtension();
                $filename = $key.'-'.time(). '.' .$extension;
                $path = "kamarImg/gambar/";
                $file->move($path, $filename);

                $imageData[] = [
                    'kamar_id' => $kamar->id,
                    'gambar' => $path.$filename,
                ];
            }
        }

        KamarGambar::insert($imageData);

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