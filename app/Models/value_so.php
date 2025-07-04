<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class value_so extends Model
{
    use HasFactory;

    protected $table = 'value_sos'; // Nama tabel

    protected $fillable = [
        'name_value_so',
        'jabatan_so_id',
        'photo', // penting agar bisa diisi mass-assignment
    ];

    // Relasi ke tabel jabatan_so
    public function jabatanSo()
    {
        return $this->belongsTo(jabatan_so::class, 'jabatan_so_id');
    }

    // Optional accessor untuk foto (URL lengkap)
    public function getPhotoUrlAttribute()
    {
        return $this->photo ? asset('storage/' . $this->photo) : null;
    }
}
