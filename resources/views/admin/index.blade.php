@extends ('admin._layouts.main')

@section('content')
    <a href="{{route('Admin.Web.Main')}}" title="Управление доменами и сайтами">WEB</a> |
    <a href="{{route('Admin.Personal.Main')}}" title="Управление персоналом">Personal</a> |
    <a href="{{route('Admin.Blog.Main')}}" title="Управление блогом">Blog</a> |
@endsection



