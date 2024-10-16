<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetAppLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        


        if (! in_array($request->segment(1), config('app.available_locales'))) {
            $locale = app()->getLocale();
            // if ($request->segment(1) === null) {
            //     return redirect('/en');
            // }
            return redirect($locale . '/' . $request->path());
        }
     
        App::setLocale($request->segment(1));

        return $next($request);
    }
}
