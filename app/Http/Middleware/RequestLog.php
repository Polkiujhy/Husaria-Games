<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;


class RequestLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $currentDate = Carbon::now();
        $timeStart = microtime(true);
        Log::info($currentDate. ': BEFORE' . $timeStart);
        $response = $next($request);

        Log::info('========================');
        $timeEnd = microtime(true);
        Log::info($currentDate. ': AFTER' . $timeEnd);
        Log::info($currentDate. ': RESULT' . ($timeEnd - $timeStart));
        return $response;
    }
}
