<?php

namespace App\Http\Middleware;

use Closure;
use Session;

use Illuminate\Support\Facades\Route;



class CheckSession
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
        $route = Route::getRoutes()->match($request);
        $currentroute = $route->getName();
        $data = session('Pages');
       
        if (empty($data)) {
            return redirect('/logout');
        }
        $page = $data;
        $containsDashboard = false;
        // dd($page);
       
        foreach ($page as $item) {
            if ($item['route_name'] === $currentroute) {
                $containsDashboard = true;
                break;  // If found, no need to continue the loop
            }
        }
        if ($containsDashboard) {
             return $next($request);
        } else {
            return redirect('/403');
        }
        // $this->setMenu();
       

    }
}