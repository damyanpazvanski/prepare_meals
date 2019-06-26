<?php

namespace App\Http\Middleware;

use Closure;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!$request->language && file_exists(resource_path("lang/{$request->route('lang')}"))) {
            app()->setLocale($request->route('lang'));
        } else if ($request->language && file_exists(resource_path("lang/{$request->language}"))) {
            if (file_exists(resource_path("lang/{$request->segment(1)}"))) {
                $redirectUrl = '/' . $request->language . '/';

                foreach ($request->segments() as $segment) {
                    $redirectUrl .= $request->segment(1) !== $segment ? $segment . '/' : '';
                }

                return redirect($redirectUrl);
            }

            $domain = rtrim(config('app.url'), '/');

            return redirect($request->language . '/' . substr(url()->previous(), strlen($domain) + 1));
        }

        return $next($request);
    }
}
