@extends('admin.main')
@section('content')
    {{ Form::open(array('action' => array('PagesController@update',$pages['id']), 'files' => true))}}
    Превью:<br>
    @if(!empty($pages['preview']))
        <img width=80 height=80 src="{{URL::to($pages['preview'])}}"><br>
    @endif
    {{Form::file('preview')}}<br>
    Название страницы:<br>
    {{Form::text('title', $pages['title'])}}<br>
    Контент:<br>
    {{Form::textarea('content', $pages['content'])}}<br>
    Опубликовать?<br>
    {{Form::select('public', array(1 => 'Да',0 => 'Нет'))}}<br>
    <h2>Мета</h2>
    description:<br>
    {{Form::text('meta_description', $pages['meta_description'])}}<br>
    keywords:<br>
    {{Form::text('meta_keywords', $pages['meta_keywords'])}}<br>

    {{ Form::token()}}
    {{ Form::submit('Сохранить') }}
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
    {{ Form::close() }}

@endsection