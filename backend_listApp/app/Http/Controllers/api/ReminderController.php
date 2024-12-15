<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    function readAll()
    {
        $reminders = Reminder::with('task')->get();

        return response()->json([
            'data' => $reminders,
        ], 200);
    }
}
