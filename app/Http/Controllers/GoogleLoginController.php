<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GoogleLoginController extends Controller
{
  public function index(\App\Library\Services\GoogleLoginService $googleLogin)
  {
    if ($googleLogin->isLoggedIn()) {
      return \Redirect::to('/');
    }

    $loginUrl = $googleLogin->getLoginUrl();

    return view('login',array('loginUrl' => $loginUrl));
  }

  public function store(\App\Library\Services\GoogleLoginService $googleLogin)
  {
    if (Input::has('code')) {
      $code = Input::get('code');
      $googleLogin->login($code);

      return \Redirect::to('/');
    } else {
      throw new \InvalidArgumentException("Code attribute is missing.");
    }
  }

  public function destroy(\App\Library\Services\GoogleLoginService $googleLogin)
  {
    $googleLogin->logout();
    return \Redirect::to('/');
  }
}
