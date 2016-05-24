@extends('admin.main')
@section('content')
    <table>
        <tr>
            <td>id</td>
            <td>Название</td>
            <td>Действие</td>
            <td>Действие</td>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td><a href="{{action('CategoriesController@edit',['categories'=>$category->id])}}">Изменить</a></td>
                <td>
                    {{ Form::open(array('action' => array('CategoriesController@destroy',$category->id))) }}
                    {{ Form::hidden('_method', 'delete') }}
                    {{ Form::token()}}
                    {{ Form::submit('Удалить') }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection