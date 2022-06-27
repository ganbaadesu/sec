@extends('layouts/operator_app')

@section('content')
    <h1>Operator</h1>
    @foreach ($data as $item)
        <h1>{{$item}}</h1>
    @endforeach

@endsection