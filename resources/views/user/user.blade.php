@extends('layouts/app')
@section('main')
    @foreach ($data as $item)
        <h1>{{$item}}</h1>
    @endforeach
@endsection