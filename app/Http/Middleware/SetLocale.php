<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            $locale = Session::get('locale', $settings->locale->default);
        } else {
            if ($settings->locale->dynamic !== 'true') {
                $locale = $settings->locale->default;
            } else {
                $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

                if (! in_array($locale, explode(',', $settings->locale->available))) {
                    $locale = $settings->locale->default;
                }
            }
        }
        App::setLocale($locale);

        return $next($request);
    }
}
