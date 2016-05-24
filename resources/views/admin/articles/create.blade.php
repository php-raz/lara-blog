@extends('admin.main')

@section('content')

    {{ Form::open(array('action' => 'ArticlesController@store', 'files' => true))}}
    Превью:<br>
    {{Form::file('preview')}}<br>
    Название статьи:<br>
    {{Form::text('title')}}<br>
    Текст статьи:<br>
    {{Form::textarea('content', '', ['id' => 'editor'])}}<br>
    Категория:<br>
    {{Form::select('category_id', $categories)}}<br>
    Разрешить комментарии?<br>
    {{Form::select('comments_enable', array(1 => 'Да',0 => 'Нет'))}}<br>
    Опубликовать?<br>
    {{Form::select('public', array(1 => 'Да',0 => 'Нет'))}}<br>
    <h2>Мета</h2>
    description:<br>
    {{Form::text('meta_description')}}<br>
    keywords:<br>
    {{Form::text('meta_keywords')}}<br>

    {{ Form::token()}}
    {{ Form::submit('Сохранить') }}
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
    {{ Form::close() }}

@endsection