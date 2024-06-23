<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchTime;
use App\Models\ClassModel;
use App\Models\Subscription;

class WatchTimeController extends Controller
{
    public function recordWatchTime(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'class_id' => 'required|exists:classes,id',
            'watch_time' => 'required|integer|min:1',
        ]);

        WatchTime::create([
            'user_id' => $request->user_id,
            'class_id' => $request->class_id,
            'watch_time' => $request->watch_time,
        ]);

        return response()->json(['message' => 'Watch time recorded successfully'], 200);
    }

    public function calculateMentorEarnings()
    {
        $totalSubscriptionAmount = Subscription::sum('amount');
        $totalNetAmount = $totalSubscriptionAmount * 0.80;

        $totalWatchTime = WatchTime::sum('watch_time');
        $classes = ClassModel::with('mentor')->get();
        $classWatchTimes = WatchTime::selectRaw('class_id, SUM(watch_time) as total_watch_time')
                                    ->groupBy('class_id')
                                    ->get();

        $mentorEarnings = [];

        foreach ($classWatchTimes as $classWatchTime) {
            $class = $classes->find($classWatchTime->class_id);
            $mentorId = $class->mentor->id;
            $classWatchTimePercentage = $classWatchTime->total_watch_time / $totalWatchTime;
            $classEarning = $classWatchTimePercentage * $totalNetAmount;

            if (!isset($mentorEarnings[$mentorId])) {
                $mentorEarnings[$mentorId] = 0;
            }

            $mentorEarnings[$mentorId] += $classEarning;
        }

        return response()->json($mentorEarnings, 200);
    }
}
