<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = "absensi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'keterangan', 'mahasiswa'
    ];

    public function Matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
}
