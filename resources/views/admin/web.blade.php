@extends ('admin._layouts.main')

@section('content')
    <H2>{{ $title }}</H2>

    <a href="#" title="Список доменов">Домены</a> |
    <a href="#" title="Список сайтов">Сайты</a> |
    <a href="#" title="Список регистраторов">Регистраторы</a> |
    <a href="#" title="Список услуг хостинга">Хостинги</a> |
    <a href="#" title="Всякое разное">Другое</a>
@endsection
