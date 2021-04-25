<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bendahara extends Model
{
     protected $fillable = [
        'gaji_id', 'nama_bdhr','email_bdhr', 'pass_bdhr'
    ];
     public function gaji(){
    	return $this->belongsTo('App\Transaksi_Gaji', 'gaji_id', 'id');
    }
    
}
