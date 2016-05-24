<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8"/>
    <title>Полигон</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
    <label for="name">Имя</label><br>
    <input type="text" name="name"/><br>
    <label for="email">Email</label><br>
    <input type="email" name="email"/><br>
    <label for="image">Аватарка</label><br>
    <input type="file" name="image"/><br>
    <input type="checkbox" name="agree" value="1">Принимаю правила <br>
    <label for="about">О себе</label><br>
    <input type="text" name="about"/><br>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <br>
    <input type="submit" value="Отправить">
</form>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
</body>
</html>