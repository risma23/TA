<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PegawaiAbsensi;

class PegawaiAbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawaiabsensi=PegawaiAbsensi::all();
        return view('tampilpegawaiabsen', ['pegawaiabsensi'=>$pegawaiabsensi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawaiabsensi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'jam_abs' => 'required',
            'hari_abs' => 'required',
            'bulan_abs' => 'required',
            'tahun_abs' => 'required',
            'jumlah_abs' => 'required'
        ]);

        PegawaiAbsensi::create([
            'jam_abs' => $request->jam_abs,
            'hari_abs' => $request->hari_abs,
            'bulan_abs' => $request->bulan_abs,
            'tahun_abs' => $request->tahun_abs,
            'jumlah_abs' => $request->jumlah_abs
        ]);

        return redirect('/tampilpegawaiabsen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawaiabsensi=PegawaiAbsensi::find();
        return view('tampilpegawaiabsen', ['pegawaiabsensi'=>$pegawaiabsensi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawaiabsensi=PegawaiAbsensi::find($id);
        $pegawaiabsensi->delete();
        return redirect('/tampilpegawaiabsen');
    }
}
