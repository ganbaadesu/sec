@extends('layouts.user_app')

@section('content')
    @foreach ($data as $item)
        <h1>{{$item}}</h1>
    @endforeach
@endsection