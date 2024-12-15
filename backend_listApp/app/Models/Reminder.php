<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_reminder';

    protected $fillable = [
        'id_task', 
        'waktu_pengingat',
    ];

    // Relasi ke tabel Task
    public function task()
    {
        return $this->belongsTo(Task::class, 'id');
    }
}
