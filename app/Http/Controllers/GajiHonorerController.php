<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\GajiHonorer;

class GajiHonorerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gajihonorer=GajiHonorer::all();
        return view('tampilgajipegawai', ['gajihonorer'=>$gajihonorer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prosesgaji');
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
            'nama_gaji' => 'required',
            'nip_gaji' => 'required',
            'statuspegawai_gaji' => 'required',
            'gajipokok_gaji' => 'required',
            'bonustambahan_gaji' => 'required',
            'total_gaji' => 'required'
        ]);

        GajiHonorer::create([
            'nama_gaji' => $request->nama_gaji,
            'nip_gaji' => $request->nip_gaji,
            'statuspegawai_gaji' => $request->statuspegawai_gaji,
            'gajipokok_gaji' => $request->gajipokok_gaji,
            'bonustambahan_gaji' => $request->bonustambahan_gaji,
            'total_gaji' => $request->total_gaji
        ]);

        return redirect('/tampilgajipegawai');
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
        //
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
        //
    }
}
