<?php

    namespace App\Http\Middleware;

    use Closure;
    use Request;

    class ThisDomen
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  \Closure                 $next
         *
         * @return mixed
         */
        public function handle($request, Closure $next)
        {
            if (
                env('APP_URL') !=
                'development' or
                Request::root() ==
                env('APP_URL') or
                Request::root() ==
                env('APP_URL_WWW')
            ) {
                return $next($request);
            }

            return redirect(env('APP_URL'));
        }
    }
