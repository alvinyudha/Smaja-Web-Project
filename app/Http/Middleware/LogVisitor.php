<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogVisitor
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $browser = $request->header('User-Agent');
        $date = now()->toDateTimeString();

        // Baca file visitors.txt
        $logEntry = "$ip,$browser,$date\n";

        // Simpan ke dalam file
        file_put_contents(storage_path('app/visitors.txt'), $logEntry, FILE_APPEND);

        return $next($request);
    }
}
