<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi_Gaji extends Model
{
     protected $fillable = [
         'absensi_id', 'pegawai_id','nama_pgw','nip_pgw', 'pass_pgw', 'status_pgw','gaji_pokok','bonus_gaji'
    ];
    
     public function absensimodel(){
    	return $this->belongsTo('App\AbsensiModel', 'absensi_id', 'id');
    }
     public function pegawai(){
    	return $this->belongsTo('App\Pegawai', 'pegawai_id', 'id');
    }
}
