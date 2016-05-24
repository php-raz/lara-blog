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
        @foreach ($pages as $page)
            <tr>
                <td>{{$page->id}}</td>
                <td><img width=80 height=80 src="{{URL::to($page->preview)}}"></td>
                <td>{{$page->title}}</td>
                <td><a href="{{action('PagesController@edit',['pages'=>$page->id])}}">Изменить</a></td>
                <td>
                    {{ Form::open(array('action' => array('PagesController@destroy',$page->id))) }}
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