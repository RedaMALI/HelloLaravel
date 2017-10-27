<?php

namespace App\Library\Services;

class GoogleLoginService
{
  protected $client;

  public function __construct(\Google_Client $client)
  {
    $this->client = $client;

    $this->client->setClientId(\Config::get('google.client_id'));
    $this->client->setClientSecret(\Config::get('google.client_secret'));
    $this->client->setDeveloperKey(\Config::get('google.api_key'));
    $this->client->setRedirectUri(\Config::get('app.url') . "/loginCallback");
    $this->client->setScopes([
                                 'https://www.googleapis.com/auth/youtube',
                                 'https://www.googleapis.com/auth/youtube.readonly',
                             ]);
    $this->client->setAccessType('offline');
  }

  public function isLoggedIn()
  {
    if (\Session::has('google_token')) {
      $this->client->setAccessToken(\Session::get('google_token'));
    } else {
      return false;
    }

    if ($this->client->isAccessTokenExpired()) {
      \Session::put('google_token', $this->client->getRefreshToken());
    }

    return !$this->client->isAccessTokenExpired();
  }

  public function login($code)
  {
    $this->client->authenticate($code);
    $token = $this->client->getAccessToken();
    \Session::put('google_token', $token);

    return $token;
  }

  public function logout()
  {
    \Session::put('google_token', NULL);
  }
  
  public function getLoginUrl()
  {
    $authUrl = $this->client->createAuthUrl();

    return $authUrl;
  }
}