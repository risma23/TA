<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KepalaSekolah extends Model
{
     protected $fillable = [
        'bdhr_id', 'nama_kepsek','email_kepsek', 'pass_kepsek'
    ];
     public function bdhr(){
    	return $this->belongsTo('App\Bendahara', 'bdhr_id', 'id');
    }
}
