<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = ['kode_provinsi', 'nama_provinsi'];
    public $timestamps = true;

    public function Kota(){
        return $this->hasMany('App\Models\Kota', 'id_provinsi');
    }
}
