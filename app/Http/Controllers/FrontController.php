<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Misi;
use App\Models\SosialMedia;
use App\Models\Visi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $berita = Berita::get();
        $visi = Visi::first();
        $misi = Misi::get();
        $sosial = SosialMedia::first();
        return view('front.home.index',compact("berita","visi","misi","sosial"));
        
        
    }
    
    public function berita(){
        $berita = null;
        $sosial = SosialMedia::first();
        return view('front.berita.index',compact("berita","sosial"));
        
    }
}
