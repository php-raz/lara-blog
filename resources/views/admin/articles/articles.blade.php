@extends('admin.main')
@section('content')
    <table>
        <tr>
            <td>id</td>
            <td>Миниатюра</td>
            <td>Название</td>
            <td>Действие</td>
            <td>Действие</td>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td><img width=80 height=80 src="{{URL::to($article->preview)}}"></td>
                <td>{{$article->title}}</td>
                <td><a href="{{action('ArticlesController@edit',['articles'=>$article->id])}}">Изменить</a></td>
                <td>
                    {{ Form::open(array('action' => array('ArticlesController@destroy',$article->id))) }}
                    {{ Form::hidden('_method', 'delete') }}
                    {{ Form::token()}}
                    {{ Form::submit('Удалить') }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        @if(Session::has('message'))
            {{Session::get('message')}}
        @endif
    </table>
@endsection