@extends('layouts.master-connected')

@section('title', 'Channel videos')

@section('content')
  <div class="videos-page">
    <div class="videos-list card-group">
      @foreach ($videos as $video)
        <div class="video-item card mb-4">
          <div class="thumbnail-area card-img-top" style="background-image: url({{ $video->snippet->thumbnails->high->url or $video->snippet->thumbnails->default->url }})"></div>
          <div class="card-block">
            <h4 class="title-area card-title">{{ $video->snippet->title }}</h4>
            <p class="description-area card-text">{{ $video->snippet->description }}</p>
          </div>
          <div class="card-footer" style="display: none;">
            <small class="text-muted"><a href="/videos/{{ $video->id->videoId }}">Voir</a></small>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="https://youtube.com/watch?v={{ $video->id->videoId }}" target="_blank">Voir sur Youtube</a></small>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection