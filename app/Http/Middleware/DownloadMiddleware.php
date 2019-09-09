<?php

namespace App\Http\Middleware;

use Closure;

class DownloadMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $request->header("Content-Disposition", "attachment;filename=template.xlsx");
        return $next($request);
    }
}
