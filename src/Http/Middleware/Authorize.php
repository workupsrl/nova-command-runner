<?php

namespace Workup\Nova\CommandRunner\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Workup\Nova\CommandRunner\CommandRunner;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     *
     * @return Response
     */
    public function handle($request, $next)
    {
        return resolve(CommandRunner::class)->authorize($request) ? $next($request) : abort(403);
    }
}
