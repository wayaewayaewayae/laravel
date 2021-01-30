<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasus extends Model
{
    protected $fillable = ['jumlah_positif','jumlah_meninggal', 'jumlah_sembu', 'tgl','id_negara'];
    public $timestamps = true;

    public function Negara(){
        return $this->belongsTo('App\Models\Negara','id_negara');
    }
}
