<?php

// app/Http/Controllers/MentorController.php
namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\WatchDuration;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MentorController extends Controller
{
    public function calculateEarnings(Request $request)
    {
        try {
            $startOfMonth = Carbon::now()->startOfMonth();
            $endOfMonth = Carbon::now()->endOfMonth();
    
            $totalMinutes = WatchDuration::whereBetween('created_at', [$startOfMonth, $endOfMonth])->sum('duration');
            $subscriptionAmount = 69000;
            $adminFee = 0.20;
            $netAmount = $subscriptionAmount * (1 - $adminFee);
    
            $mentors = Mentor::with(['classes.watchDurations' => function ($query) use ($startOfMonth, $endOfMonth) {
                $query->whereBetween('created_at', [$startOfMonth, $endOfMonth]);
            }])->get();
    
            $earnings = $mentors->map(function ($mentor) use ($totalMinutes, $netAmount) {
                $mentorMinutes = $mentor->classes->sum(function ($class) {
                    return $class->watchDurations->sum('duration');
                });
    
                $mentorEarnings = ($mentorMinutes / $totalMinutes) * $netAmount;
    
                return [
                    'mentor_id' => $mentor->id,
                    'mentor_name' => $mentor->name,
                    'minutes_watched' => $mentorMinutes,
                    'earnings' => $mentorEarnings,
                ];
            });
    
            return response()->json(['data' => $earnings]);
    
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

