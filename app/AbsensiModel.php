<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiModel extends Model
{
     protected $fillable = [
        'jam_absensi', 'hari_absensi', 'bulan_absensi','tahun_absensi', 'jumlah_absensi'
    ];
}
