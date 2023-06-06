<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function guru()
    {
        return $this->belongsToMany(Guru::class, PenggunaKelas::class);
    }

    public function walas()
    {
        return $this->hasMany(Walas::class);
    }
}