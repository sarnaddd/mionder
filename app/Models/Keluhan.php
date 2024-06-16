<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhan';
    protected $primaryKey = 'id';
    protected $fillable = ['Keluhan', 'Tanggal', 'Nama_Dokter', 'Nama_Pasien'];
}
