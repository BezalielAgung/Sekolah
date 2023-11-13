<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaKategori;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::get();
        return view('admin.berita.berita.index',compact("berita"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $berita = null;
        $kategori = Kategori::get();
        return view('admin.berita.berita.form',compact("berita","kategori"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'judul'  => 'required',
            'isi'  => 'required',
            'kategori_id'  => 'required',
            'image'  => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('warning', $validator->messages()->first());
        }

        if ($request->file('image')) {
            $foto_name = time() . '-' . $request->file('image')->getClientOriginalName();
            $image = $request->file('image')->storeAs('public/berita', $foto_name);
            }

            $data = Berita::create([
                "judul" => $request->judul,
                "isi" => $request->isi,
                "image" => $foto_name,
            ]);

            foreach($request->kategori_id as $item){
                BeritaKategori::create([
                    "berita_id" => $data->id,
                    "kategori_id" => $item,
             ]);   
            }

        if($data) {
            return redirect()->route('berita.berita.index')->with('success', 'berhasil ditambah!');
        }else{
            return redirect()->route('berita.berita.index')->with('error', 'Gagal Menambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $beritum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $beritum)
    {
        // dd($beritum);
        $berita = Berita::where("id",$beritum->id)->with("kategori")->first();
        // dd($berita);
        $berita->kategori_id = $berita->kategori->map(function ($q){
            return $q->id;
        });
        $kategori = Kategori::get();
        return view('admin.berita.berita.form',compact("berita","kategori"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $beritum)
    {
        $data = Berita::where('id',$beritum->id)->first();

        $validator = Validator::make($request->all(), [
            'judul'  => 'required',
            'isi'  => 'required',
            'kategori_id'  => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('warning', $validator->messages()->first());
        }

        if ($request->file('image')) {
            File::delete('storage/berita/'. $data->image);
            $foto_name = time() . '-' . $request->file('image')->getClientOriginalName();
            $image = $request->file('image')->storeAs('public/berita', $foto_name);
            $data->update([
                "image" => $foto_name,
            ]);
            }

            $data->update([
                "judul" => $request->judul,
                "isi" => $request->isi,
            ]);

            foreach($request->kategori_id as $item){
                BeritaKategori::where("kategori_id",$item)->delete();
                BeritaKategori::create([
                    "berita_id" => $data->id,
                    "kategori_id" => $item,
             ]);   
            }

        if($data) {
            return redirect()->route('berita.berita.index')->with('success', 'berhasil ditambah!');
        }else{
            return redirect()->route('berita.berita.index')->with('error', 'Gagal Menambahkan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $beritum)
    {
        $data = Berita::where('id',$beritum->id)->first();

            if (!$data) {
                return back()->with('warning', 'Data tidak ada!');
            }
            
            BeritaKategori::where("berita_id",$data->id)->delete();
            File::delete('storage/berita/'. $data->image);
            $data->delete();


            if($data) {
                return back()->with('success', 'berhasil Menghapus Data!');
            }else{
                return back()->with('error', 'Gagal Menghapus Data!');
            }
    }
}
