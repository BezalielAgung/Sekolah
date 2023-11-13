<?php

namespace App\Http\Controllers;

use App\Models\SosialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SosialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sosial = SosialMedia::first();
        return view('admin.master.sosial_media.index',compact('sosial'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     // 'nm_jenis'  => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return back()->with('warning', $validator->messages()->first());
        // }
        // dd($request->all(),"ini store");

        $data = SosialMedia::create([
            "tiktok" => $request->tiktok,
            "instagram" => $request->instagram,
            "youtube" => $request->youtube,
            "email" => $request->email,
            "facebook" => $request->facebook,
            "maps" => $request->maps,
        ]);

        if($data) {
            return redirect()->route('sosial_media.index')->with('success', 'berhasil ditambah!');
        }else{
            return redirect()->route('sosial_media.index')->with('error', 'Gagal Menambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SosialMedia $sosialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SosialMedia $sosialMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SosialMedia $sosialMedia)
    {
        // dd($request->all());
        // $validator = Validator::make($request->all(), [
        //     'nm_jenis'  => 'required|string',
        // ]);

        // if ($validator->fails()) {
        //     return back()->with('warning', $validator->messages()->first());

        // }
        // dd($request->all(),"ini update");


        $data = SosialMedia::where('id',$sosialMedia->id)->first();
        $data->update([
            "tiktok" => $request->tiktok,
            "instagram" => $request->instagram,
            "youtube" => $request->youtube,
            "email" => $request->email,
            "facebook" => $request->facebook,
            "maps" => $request->maps,
        ]);

        if($data) {
            return redirect()->route('sosial_media.index')->with('success', 'berhasil Update!');
        }else{
            return redirect()->route('sosial_media.index')->with('error', 'Gagal Update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SosialMedia $sosialMedia)
    {
        //
    }
}
