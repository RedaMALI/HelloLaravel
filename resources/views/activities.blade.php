@extends('layouts.master-connected')

@section('title', 'Channel activities')

@section('content')
  <div class="activities-page">
    <div class="activities-list card-group">
      @foreach ($activities as $activity)
        <div class="activity-item card mb-4">
          <div class="thumbnail-area card-img-top" style="background-image: url({{ $activity->snippet->thumbnails->high->url or $activity->snippet->thumbnails->default->url }})"></div>
          <div class="card-block">
            <h4 class="title-area card-title">{{ $activity->snippet->title }}</h4>
            <p class="description-area card-text">{{ $activity->snippet->description }}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">{{ $activity->snippet->type }}</small>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection