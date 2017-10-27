<?php

namespace App\Http\Middleware;

use Closure;
use App\Library\Services\GoogleLoginService;

class CheckGoogleToken
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
    $googleClient = new \Google_Client();
    $googleLoginService = new GoogleLoginService($googleClient);

    if( !$googleLoginService->isLoggedIn() ) {
      return redirect('/login');
    }
    
    return $next($request);
  }
}
