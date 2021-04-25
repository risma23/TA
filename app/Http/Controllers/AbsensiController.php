<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AbsensiModel;

class AbsensiController extends Controller
{
    public function absensi(){
    	return view('absensi');
    }
	public function tmbhabsensi(){
    	return view('tambahabsensi');
    }
	public function addabsen(){
		$absen=AbsensiModel::all();  
        return view('tambahabsensi',['absensi'=>$absensi]);
	}
	public function store(Request $request)
    {
       $this->validate($request,[
            'jam_absensi' => 'required',
            'hari_absensi' => 'required',
            'bulan_absensi' => 'required',
			'tahun_absensi'=>'required',
			'jumlah_absensi'=>'required' 
          ]);
 
        AbsensiModel::create([
            'jam_absensi' => $request->jam_absensi,
            'hari_absensi' => $request->hari_absensi,
            'bulan_absensi' => $request->bulan_absensi,
             'tahun_absensi' => $request->tahun_absensi,
            'hari_absensi' => $request->hari_absensi   
        ]);
 
        return redirect('/tambahabsensi')->with('tambah','Berhasil! Data berhasil ditambahkan');
	}
}
