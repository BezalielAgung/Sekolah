<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::get();
        return view('admin.berita.kategori.index',compact("kategori"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = null;
        return view('admin.berita.kategori.form',compact("kategori"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori'  => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('warning', $validator->messages()->first());
        }

        $data = Kategori::create([
            "nm_kategori" => $request->kategori
        ]);

        if($data) {
            return redirect()->route('berita.kategori.index')->with('success', 'berhasil ditambah!');
        }else{
            return redirect()->route('berita.kategori.index')->with('error', 'Gagal Menambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        // $kategori ;
        return view('admin.berita.kategori.form',compact("kategori"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $data = Kategori::where("id",$kategori->id)->first();
        $validator = Validator::make($request->all(), [
            'kategori'  => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('warning', $validator->messages()->first());
        }

        $data->update([
            "nm_kategori" => $request->kategori
        ]);

        if($data) {
            return redirect()->route('berita.kategori.index')->with('success', 'berhasil ditambah!');
        }else{
            return redirect()->route('berita.kategori.index')->with('error', 'Gagal Menambahkan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $data = Kategori::where('id',$kategori->id)->first();

            if (!$data) {
                return back()->with('warning', 'Data tidak ada!');
            }

            $data->delete();

            if($data) {
                return back()->with('success', 'berhasil Menghapus Data!');
            }else{
                return back()->with('error', 'Gagal Menghapus Data!');
            }
    }
}
