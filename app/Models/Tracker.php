<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Tracker extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tanggal',
        'Nama_Dokter',
        'Result',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
