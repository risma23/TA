<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PegawaiAbsensi extends Model
{
    protected $table='pegawaiabsentable';
    protected $fillable = [
        'jam_abs', 'hari_abs', 'bulan_abs','tahun_abs','jumlah_abs'
    ];

}
