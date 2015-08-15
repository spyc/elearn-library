@extends('library::template')

@section('wrap')
    <div class="jumbotron">
        <div class="container content-container">
            <h2>Library News</h2>
            <p>Catch up with the library news.</p>
        </div>
    </div>
    <div class="container">
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Title</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newses as $news)
                    <tr>
                        <td>{{ $news->created_at }}</td>
                        <td><a href="{{ route('library.news.show', ['news' => $news->id]) }}">{{ $news->title }}</a></td>
                        <td>{{ $news->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
