<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Subscription;

class CheckSubscription
{
    public function handle(Request $request, Closure $next)
    {
        $userId = $request->user_id;

        $activeSubscription = Subscription::where('user_id', $userId)
                                          ->where('start_date', '<=', now())
                                          ->where('end_date', '>=', now())
                                          ->exists();

        if (!$activeSubscription) {
            return response()->json(['message' => 'No active subscription found'], 403);
        }

        return $next($request);
    }
}
