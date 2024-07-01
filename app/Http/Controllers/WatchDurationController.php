<?php

// app/Http/Controllers/WatchDurationController.php
namespace App\Http\Controllers;

use App\Models\WatchDuration;
use Illuminate\Http\Request;

class WatchDurationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'class_id' => 'required|exists:classes,id',
            'duration' => 'required|integer',
        ]);

        $watchDuration = WatchDuration::create($request->all());

        return response()->json(['message' => 'Watch duration recorded', 'data' => $watchDuration], 201);
    }
}

