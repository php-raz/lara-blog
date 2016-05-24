@extends('admin.main')
@section('content')
    <h2>{{$article->title}}</h2>
    <small>Дата статьи: {{$article->updated_at}}</small>
    <div>
        <img width=200 height=200 style="float: left;margin: 7px 7px 7px 7px;" src="{{URL::to($article->preview)}}">
        {{$article->content}}
    </div>
    <div class="comments">
        <ul>
            {{$article->comments()->where('public', '=', 1)->count()}}
            @foreach($comments as $comment)
                <li>Автор: {{$comment->author}}<br>{{$comment->content}}</li>
            @endforeach
        </ul>
    </div>
    @if($article->comments_enable==1)
        @include('site.comment')
    @endif
@endsection