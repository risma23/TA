<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TAController extends Controller
{
    public function index(){
    	return view('dashboard');
    }
    public function pegawai(){
    	return view('pegawai');
    }
    public function transgaji(){
    	return view('transgaji');
    }
	public function tmbhabsensi(){
    	return view('tambahabsensi');
    }
}
