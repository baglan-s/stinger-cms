<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Language;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $languageCode = $request->route('lang');
        $hasLanguage = Language::where('code', $languageCode)->count() > 0;
        $locale = $hasLanguage ? $languageCode : 'ru';

        app()->setLocale($locale);

        URL::defaults(['lang' => $locale]);

        return $next($request);
    }
}
