{{ Form::open()}}
Ваше имя:<br>
{{Form::text('author')}}<br>
Ваш email:<br>
{{Form::text('email')}}<br>
Ваше сообщение:<br>
{{Form::textarea('content', '', ['id' => 'editor'])}}<br>
{{ Form::token()}}
{{ Form::submit('Отправить') }}
{{ Form::close() }}

@if(Session::has('message'))
{{Session::get('message')}} <!-- здесь будем выводить сообщения об успешности добавления комментария -->
@endif