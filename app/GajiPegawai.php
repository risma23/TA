<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GajiPegawai extends Model
{
    protected $table='gajipegawaitable';
    protected $fillable = [
        'nama_gaji', 'nip_gaji', 'statuspegawai_gaji', 'gajipokok_gaji', 'bonustambahan_gaji', 'total_gaji'
    ];
}
