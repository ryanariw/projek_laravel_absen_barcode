<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    public function karyawan()
    {
        return $this->belongsTo('App\Models\Karyawan','karyawan_id');
    }
}
