<!DOCTYPE html>
<head>
    <title>{{ $title }}</title>
</head>
<body>

<a href="{{route('Admin.Main')}} " title="Вернуться на главную в панели администратора"><h1>Панель администратора</h1></a><hr>

@yield('content')


</body>
</html>
