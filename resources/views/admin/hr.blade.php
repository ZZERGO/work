@extends ('admin._layouts.main')

@section('content')
    <H2>{{ $title }}</H2>

    <a href="{{ route('Admin.Personal.users.index') }}" title="Список сотрудников">Сотрудники</a> |
    <a href="#" title="Список отделов">Отделы</a> |
    <a href="#" title="Список филиалов">Филиалы</a> |
    <a href="#" title="Список должностей">Должности</a> |
    <a href="#" title="Перечень стран">Страны</a> |

@endsection
