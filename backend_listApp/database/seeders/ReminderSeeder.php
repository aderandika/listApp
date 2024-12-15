<?php

namespace Database\Seeders;

use App\Models\Reminder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reminder = [
            [
                'id_task' => 1,
                'waktu_pengingat' => '17:00:00',
            ]
        ];

        foreach ($reminder as $reminderItem) {
            Reminder::create($reminderItem);
        }
    }
}
