<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
  public function index()
  {
    $youtubeClient = \App::make('YoutubeClient');
    $subscriptions = $youtubeClient->subscriptions->listSubscriptions('snippet', ['mine' => true, 'maxResults' => 50]);

    //dump($subscriptions->items[0]->snippet);

    return view('subscriptions',array('subscriptions' => $subscriptions));
  }
}
