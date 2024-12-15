<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = [
        [
            'id_user' => 1,
            'nama_tugas' => 'membuat aplikasi android',
            'deskripsi' => 'membuat aplikasi',
            'tgl_tugas' => now(),
            'status' => 'belum_selesai',
            'prioritas' => 'low',
        ]
           
        ];

        foreach ($task as $taskItem) {
            Task::create($taskItem);
        }
    }
}
