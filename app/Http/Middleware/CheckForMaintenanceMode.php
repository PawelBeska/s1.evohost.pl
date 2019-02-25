<?php

namespace App\Http\Middleware;

use App\Http\Controllers\ManietenceController;
use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Original;

class CheckForMaintenanceMode extends Original
{
    /**
     * Application routes not effected by the down command.
     *
     * @var array
     */
    protected $excludedRoutes = [];
    /**
     * @var array
     */
    protected $excludedIPs = [];

    /**
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function handle($request, Closure $next)
    {
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
        if (config('app.manietence', 0)) {
            $response = $next($request);
            if (in_array($request->ip(), $this->excludedIPs)) {
                return $response;
            }
            $route = $request->route();
            if ($route instanceof Route) {
                if (in_array($route->getName(), $this->excludedRoutes)) {
                    return $response;
                }
            }
            return Response::make(view('Manietence'), 200);
        }
        return $next($request);
    }
}