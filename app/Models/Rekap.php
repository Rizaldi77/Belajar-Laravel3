<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;
    protected $table = 'rekaps';
    protected $primaryKey = 'is';
    protected $guarded = [];
    public $timestamps = true;
    protected $fillable = [
        'name', 'email', 'address', 'notelp', 'noktp', 'instansi', 'loket', 'keperluan'
      ];
}