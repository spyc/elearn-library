@extends('library::template')

@section('wrap')
    <div class="jumbotron">
        <div class="container content-container">
            <h2>{{ $news->title }} <small>{{ $news->type }}</small></h2>
            <p>{{ $news->updated_at }}</p>
        </div>
    </div>
    <div class="container">
        <h3>{{ $news->event_time }}</h3>
        <div data-markdown-translate="true">
            {{ $news->content }}
        </div>
    </div>
@stop