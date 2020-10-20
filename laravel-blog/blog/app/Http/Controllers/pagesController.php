<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\urun;
use DB;
use Session;
session_start();

class pagesController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function urun_ekle(Request $request){
        
        if($request->hasfile('urun_resim'))
        {
            $urun_resim =Storage::putFile('public/upload/urun/',$request->urun_resim);
        }

        $urun_ekle = new urun();
        $urun_ekle->urun_kategori = $request->urun_kategori;
        $urun_ekle->urun_marka = $request->urun_marka;
        $urun_ekle->urun_islemci = $request->urun_islemci;
        $urun_ekle->urun_ram = $request->urun_ram;
        $urun_ekle->urun_disk = $request->urun_disk;
        $urun_ekle->urun_ekran = $request->urun_ekran;
        $urun_ekle->urun_garanti = $request->urun_garanti;
        $urun_ekle->urun_durum = $request->urun_durum;
        $urun_ekle->urun_kimden = $request->urun_kimden;
        $urun_ekle->urun_adres = $request->urun_adres;
        $urun_ekle->urun_resim = $urun_resim;
        $urun_ekle->save();

        return redirect('index')->with('urun_ekle',$urun_ekle);
    }
}
