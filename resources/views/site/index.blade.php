@extends('admin.main')
@section('content')
    @if(!empty($pages))
        <div style="width: 700px; float: left;">
            <h2>Статьи</h2>
            @foreach($articles as $article)
                <div style="height: 130px;">
                    <h3><a href="{{action('FrontController@show',['id'=>$article->id])}}">{{$article->title}}</a></h3>
                    <small>Дата статьи: {{$article->updated_at}}</small>
                    <div>
                        <img width=80 height=80 style="float: left;margin: 7px 7px 7px 7px;"
                             src="{{URL::to($article->preview)}}">{{str_limit($article->content, 150)}}
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @if(!empty($pages))
        <div style="width: 213px; float: right;">
            <h5>Страницы</h5>
            <ul>
                @foreach ($pages as $page)
                    <li><a href="{{action('PagesController@show',['id'=>$page->id])}}">{{$page->title}}</a></li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection