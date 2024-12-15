<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function readAll()
    {
        $categories = Category::with('user')->get();

        return response()->json([
            'data' => $categories,
        ], 200);
    }
}
