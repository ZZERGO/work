@extends('site._layouts.main')
<table>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->last_name }}</td>
        </tr>
    @endforeach
</table>

