@extends('admin.main')
@section('content')
    {{ Form::open(array('action' => array('ArticlesController@update',$article['id']), 'files' => true))}}
    Превью:<br>
    @if(!empty($article['preview']))
        <img width=80 height=80 src="{{URL::to($article['preview'])}}"><br>
    @endif
    {{Form::file('preview')}}<br>
    Название статьи:<br>
    {{Form::text('title', $article['title'])}}<br>
    Текст статьи:<br>
    {{Form::textarea('content', $article['content'])}}<br>
    Категория:<br>
    {{Form::select('category_id', $categories, $article['category_id'])}}<br>
    Разрешить комментарии?<br>
    {{Form::select('comments_enable', array(1 => 'Да',0 => 'Нет'))}}<br>
    Опубликовать?<br>
    {{Form::select('public', array(1 => 'Да',0 => 'Нет'))}}<br>
    <h2>Мета</h2>
    description:<br>
    {{Form::text('meta_description', $article['meta_description'])}}<br>
    keywords:<br>
    {{Form::text('meta_keywords', $article['meta_keywords'])}}<br>

    {{ Form::token()}}
    {{ Form::submit('Сохранить') }}
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
    {{ Form::close() }}

@endsection