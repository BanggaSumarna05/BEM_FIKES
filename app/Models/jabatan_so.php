<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan_so extends Model
{
    use HasFactory;

    protected $table = 'jabatan_sos';

    protected $fillable = ['name_jabatan'];

    public function valueSo()
    {
        return $this->hasOne(value_so::class, 'jabatan_so_id');
    }
}
