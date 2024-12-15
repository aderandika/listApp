<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function readAll()
    {
        $tasks = Task::with('user')->get();

        return response()->json([
            'data' => $tasks,
        ], 200);
    }

    // Fungsi untuk menampilkan limit
    function readTaskLimit()
    {
        $tasks = Task::orderBy('created_at', 'desc')
                        ->limit('5')
                        ->with('user')
                        ->get();

        // Cek data jika ada 
        if (count($tasks)>0) {
            return response()->json([
                'data' => $tasks,
            ], 200);
        }else {
            return response()->json([
                'message' => 'Data tidak ditemukan',
                'data' => $tasks,
            ], 404);
        }
    }

    // Fungsi untuk pencarian berdasarkan task
    function searchByTask($nama_tugas)
    {
        $tasks = Task::where('nama_tugas', 'like', '%'.$nama_tugas.'%')
        ->orderBy('tgl_tugas')
        ->get();

        // Cek data jika ada 
        if (count($tasks)>0) {
            return response()->json([
                'data' => $tasks,
            ], 200);
        }else {
            return response()->json([
                'message' => 'Data tidak ditemukan',
                'data' => $tasks,
            ], 404);
        }
    }

     // Fungsi login untuk menampilkan data berdasarkan User ID
     function whereUserId($id)
     {
         $tasks = Task::where('id_user', '=', $id)
         ->with('user')
         ->orderBy('created_at', 'desc')
         ->get();
 
         // Cek data jika ada 
         if (count($tasks)>0) {
             return response()->json([
                 'data' => $tasks,
             ], 200);
         }else {
             return response()->json([
                 'message' => 'Data tidak ditemukan',
                 'data' => $tasks,
             ], 404);
         }
     }
}
