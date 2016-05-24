<?php

Route::get('/', 'FrontController@index');

Route::get('/show/{id}', 'FrontController@show');

Route::group(['middleware' => 'auth', 'prefix' => 'adminzone'], function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::resource('articles', 'ArticlesController');
    Route::resource('pages', 'PagesController');
    Route::resource('categories', 'CategoriesController');

    Route::post('articles/{id}', 'ArticlesController@update');
    Route::post('pages/{id}', 'PagesController@update');
    Route::post('categories/{id}', 'CategoriesController@update');

    Route::get('comments','CommentsController@show');
    Route::get('comments/delete/{id}','CommentsController@delete');
    Route::get('comments/published/{id}','CommentsController@published');

});
Route::get('/show/{id}','FrontController@show');
Route::post('/show/{id}','CommentsController@save');

Route::auth();

Route::get('/home', 'HomeController@index');

//Route::get('/', 'MainController@index');
//Route::post('/','MainController@check');