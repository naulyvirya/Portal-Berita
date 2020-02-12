<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index()
    {
        $tabungan = Tabungan::with('siswa')->get();
        return view('tabungan.index', compact('tabungan'));
    }

    public function create()
    {
        $data = Siswa::all();
        return view('tabungan.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabungan = new Tabungan;
        $tabungan->siswa_id = $request->siswa_id;
        $tabungan->jumlah_uang = $request->jumlah_uang;
        $tabungan->save();
        return redirect()->route('tabungan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function show(Tabungan $tabungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabungan $tabungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabungan $tabungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabungan $tabungan)
    {
        //
    }
}
