<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $fillable = ['kode_kelurahan', 'nama_kelurahan', 'id_kecamatan'];
    public $timestamps = true;

    public function Kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }

    public function Rw(){
        return $this->hasMany('App\Models\Rw', 'id_kelurahan');
    }
}
