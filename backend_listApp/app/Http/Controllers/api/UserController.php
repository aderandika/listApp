<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan seluruh user
    function readAll()
    {
        $users = User::all();

        return response()->json([
            'data' => $users,
        ], 200);
    }

    // Fungsi untuk register akun 
    function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:4|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);

        // Proses Insert ke tabel 
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'data' => $user,
        ], 201);
    }

    // Fungsi untuk login 
    function login(Request $request)
    {
        // Validasi jika login gagal
        if (!Auth::attempt($request->only('username', 'password'))) {
           return response()->json([
            'message' => 'Maaf Login Gagal!'
           ], 401);
        }

        // Jika berhasil mengambil data user berdasarkan username
        $user = User::where('username', $request->username)->firstOrFail();

        // Generate Token 
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'data' => $user,
            'token' => $token,
        ], 200);


    }
}
