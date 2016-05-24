@extends('admin.main')
@section('content')

    {{ Form::open(array('action' => array('CategoriesController@store')))}}
    Название категории<br>
    {{Form::text('title')}}
    {{ Form::token()}}
    {{ Form::submit('Сохранить') }}
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
    {{ Form::close() }}

@endsection