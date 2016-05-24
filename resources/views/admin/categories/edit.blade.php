@extends('admin.main')
@section('content')

    {{ Form::open(array('action' => array('CategoriesController@update',$category->id)))}}
    Название категории<br>
    {{Form::text('title', $category->title)}}
    {{ Form::hidden('_method', 'put') }}
    {{ Form::token()}}
    {{ Form::submit('Сохранить') }}
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
    {{ Form::close() }}

@endsection