<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
     protected $fillable = [
        'user_id', 'absensi_id', 'nama_pegawai','nip_pegawai', 'jns_kelamin', 'alamat'
    ];
     public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }
     public function absensimodel(){
    	return $this->belongsTo('App\AbsensiModel', 'absensi_id', 'id');
    }
}
