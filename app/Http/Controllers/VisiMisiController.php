<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi;
use App\Models\Misi;
use Illuminate\Support\Facades\Validator;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visi = Visi::first();
        $misi = Misi::get();
        
        return view('admin.master.visi_misi.index',compact('visi',"misi"));
        
    }
    
    public function getMisi()
    {
        $misi = Misi::get();
        return response()->json([
            'status' => true,
            'data' => $misi,
        ]); 

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'visi'  => 'required',
            'misi'  => 'array|min:1',
        ]);

        if ($validator->fails()) {
            return back()->with('warning', $validator->messages()->first());
        }

        $data = Visi::create([
            "visi" => $request->visi
        ]);
        foreach ($request->misi as $item) {
            $misi = Misi::create([
                "misi" => $item
            ]);

        }


        if($data && $misi) {
            return redirect()->route('visi_misi.index')->with('success', 'berhasil ditambah!');
        }else{
            return redirect()->route('visi_misi.index')->with('error', 'Gagal Menambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Visi $visi_misi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visi $visi_misi)
    {
        $jenis = $visi_misi;
        // $jenis = Visi::where('id',$jenis->id)->first(); 
        return view('admin.master_buku.jenis.form',  compact('jenis'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visi $visi_misi)
    {
        // dd($request->all(),"update");

        $validator = Validator::make($request->all(), [
            'visi'  => 'required',
            'misi'  => 'array|min:1',
        ]);

        if ($validator->fails()) {
            return back()->with('warning', $validator->messages()->first());

        }

        $data = Visi::where('id',$visi_misi->id)->first();
        $data->update([
            'visi' => $request->visi,
        ]);
        Misi::getQuery()->delete();
        foreach ($request->misi as $item) {
            $misi = Misi::create([
                "misi" => $item
            ]);
        }


        if($data && $misi) {
            return redirect()->route('visi_misi.index')->with('success', 'berhasil Update!');
        }else{
            return redirect()->route('visi_misi.index')->with('error', 'Gagal Update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visi $visi_misi)
    {
        $jenis = $visi_misi;
        $data = Visi::where('id',$jenis->id)->first();

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
