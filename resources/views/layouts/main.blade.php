<html>
<head>
    <meta charset='utf-8'/>
    <link rel="stylesheet" href={{asset('css/style.css')}}/>
    <title>Мой сайт</title>
</head>
<body>
<div id="header">
    <h1> @yield('header')</h1>
</div>
<div id="content">
    @yield('content')
</div>
<div id="footer">
    @yield('footer')
</div>
</body>
</html>