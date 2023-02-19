<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * ExpectJson middleware.
 *
 * @author Kristýna Tomanová <kristytoman@proton.me>
 */
class ExpectJson
{
    /**
     * Handle an incoming request.
     * Add header to accept only JSON response.
     *
     * @param Request $request
     * @param Closure(Request): (Response) $next
     *
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}
