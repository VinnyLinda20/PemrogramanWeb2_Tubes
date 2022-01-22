<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatans';
    protected $fillable = [
        'id','nama_jabatan'
    ];
    public function Karyawan(){
        return $this->hasMany('App\Karyawan', 'jabatan');
    }
}
