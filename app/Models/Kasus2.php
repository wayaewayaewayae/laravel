<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    protected $fillable = ['jumlah_reaktif','jumlah_positif','jumlah_meninggal', 'jumlah_sembu', 'tgl','id_rw'];
    public $timestamps = true;

    public function Rw(){
        return $this->belongsTo('App\Models\Rw','id_rw');
    }
}
