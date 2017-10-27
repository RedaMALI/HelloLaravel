@extends('layouts.master-connected')

@section('title', 'My subscriptions')

@section('content')
  <div class="subscriptions-page">
    <div class="subscriptions-list card-group">
      @foreach ($subscriptions as $subscription)
        <div class="subscription-item card mb-4">
          <div class="thumbnail-area card-img-top" style="background-image: url({{ $subscription->snippet->thumbnails->high->url or $subscription->snippet->thumbnails->default->url }})"></div>
          <div class="card-block">
            <h4 class="title-area card-title">{{ $subscription->snippet->title or $subscription->snippet->channelTitle }}</h4>
            <p class="description-area card-text">{{ $subscription->snippet->description }}</p>
          </div>
          <div class="card-footer" style="display: none;">
            <small class="text-muted activities-link"><a href="/activities/{{ $subscription->snippet->resourceId->channelId }}">Activités</a></small>
          </div>
          <div class="card-footer">
            <small class="text-muted videos-link"><a href="/videos/{{ $subscription->snippet->resourceId->channelId }}">Vidéos</a></small>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection