<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class Language
{
    public function __construct(Application $app, Request $request)
    {
        $this->app = $app;
        $this->request = $request;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Cookie::has('language')) {
            try {
                $decrypted = Crypt::decryptString(Cookie::get('language'));
            } catch (DecryptException $e) {
                $decrypted = false;
            }

            if($decrypted) {
                $t = explode('|',$decrypted );
                $data = json_decode(array_pop($t));
            } else {
                $data = false;
            }
        } else {
            $data = false;
        }

        if(gettype($data) === 'object' && in_array($data->code, config('app.available_locales'))){
            $this->app->setLocale($data->code);
        }else{
            $this->app->setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
