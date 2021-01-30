<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    protected $fillable = ['nama','id_kelurahan'];
    public $timestamps = true;

    public function Kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan', 'id_kelurahan');
    }
    public function Kasus2(){
        return $this->hasMany('App\Models\Kasus2', 'id_rw');
    }
}
