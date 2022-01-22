<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';
    protected $fillable = [
        'id', 'nip', 'nama', 'alamat', 'no_telepon', 'jabatan', 'status_kerja'
    ];

    public function Jabatan(){
        return $this->belongsTo('App\Jabatan', 'jabatan');
    }
}
