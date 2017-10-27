<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
  public function index($channelId)
  {
    $youtubeClient = \App::make('YoutubeClient');
    $activities  = $youtubeClient->activities->listActivities('snippet,contentDetails', ['channelId' => $channelId, 'maxResults' => 50]);

    //dump($activities->items);

    return view('activities',array('activities' => $activities));
  }
}
