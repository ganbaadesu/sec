@extends('layouts/cnee_app')

@section('content')
    <h1>Cnee</h1>
    @foreach ($data as $item)
        <h1>{{$item}}</h1>
    @endforeach
@endsection