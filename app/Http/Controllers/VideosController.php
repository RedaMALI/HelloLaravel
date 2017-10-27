<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
  public function index($channelId)
  {
    $youtubeClient = \App::make('YoutubeClient');
    $videos  = $youtubeClient->search->listSearch('id,snippet', ['channelId' => $channelId, 'order' => 'date', 'type' => 'video', 'maxResults' => 50]);

    //dump($videos->items);

    return view('videos',array('videos' => $videos));
  }
}
