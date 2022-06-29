@extends('layouts.admin_app')

@section('content')
    @foreach ($users as $user)
        {{$user}}
        <br>
    @endforeach
    @foreach ($permissions as $permission)
        {{$permission}}
        <br>
    @endforeach
@endsection