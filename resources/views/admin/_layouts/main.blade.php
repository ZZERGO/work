<!DOCTYPE html>
<head>
    <title>{{ $title }}</title>
</head>
<body>

<a href="{{route('Admin.Main')}}"><h1>Панель администратора</h1></a><hr>

@yield('content')


</body>
</html>
