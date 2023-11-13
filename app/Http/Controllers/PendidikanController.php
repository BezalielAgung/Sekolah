<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikan = [];
        return view('admin.guru.pendidikan.index',compact("pendidikan"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendidikan = null;
        return view('admin.guru.pendidikan.index',compact("pendidikan"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendidikan $pendidikan)
    {
        //
    }
}
