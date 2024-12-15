<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; 

    protected $fillable = [
        'id_user', 
        'nama_tugas',
        'deskripsi', 
        'tgl_tugas',
        'status',
        'prioritas', 
    ];

    // Relasi ke tabel user
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
