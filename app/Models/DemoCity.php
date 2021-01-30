<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoCity extends Model
{
    use HasFactory;
    protected $table = 'demo_cities';
    protected $fillable = ['id_provinsi', 'name'];
}