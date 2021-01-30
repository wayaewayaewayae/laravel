<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoState extends Model
{
    use HasFactory;
    protected $table = 'demo_state';
    protected $fillable = ['name'];
}