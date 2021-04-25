<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GajiHonorer extends Model
{
     protected $table='gajihonorertable';
    protected $fillable = [
        'nama_gaji', 'nip_gaji', 'statuspegawai_gaji', 'gajipokok_gaji', 'bonustambahan_gaji', 'total_gaji'
    ];
}
