<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_category';
    protected $fillable = [
        'id_user', 
        'nama_kategori',
        'warna_label', 
    ];


    // Relasi ke tabel user
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
