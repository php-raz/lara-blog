@extends('admin.main')

@section('content')

    {{ Form::open(array('action' => 'PagesController@store', 'files' => true))}}
    Превью:<br>
    {{Form::file('preview')}}<br>
    Название страницы:<br>
    {{Form::text('title')}}<br>
    Контент:<br>
    {{Form::textarea('content')}}<br>
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