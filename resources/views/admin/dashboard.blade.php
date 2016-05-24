@extends('admin.main')
@section('content')
    <h1>Админка</h1>
    <h2>Статьи</h2>
    <ul>
        <li><a href="{{action('ArticlesController@index')}}">Все статьи</a></li>
        <li><a href="{{action('ArticlesController@create')}}">Добавить статью</a></li>
    </ul>
    <h2>Категории</h2>
    <ul>
        <li><a href="{{action('CategoriesController@index')}}">Все категории</a></li>
        <li><a href="{{action('CategoriesController@create')}}">Добавить категорию</a></li>
    </ul>
    <h2>Комментарии</h2>
    <ul>
        <li><a href="/adminzone/comments">Все комментарии</a></li>
        <li><a href="{{action('CommentsController@show')}}">Управление комментариями</a></li>
    </ul>
    <h2>Страницы</h2>
    <ul>
        <li><a href="{{action('PagesController@index')}}">Все страницы</a></li>
        <li><a href="{{action('PagesController@create')}}">Добавить страницу</a></li>
    </ul>
@endsection