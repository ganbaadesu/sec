@extends('layouts/account_app')

@section('content')
    <h1>Account</h1>
    @foreach ($data as $item)
        <h1>{{$item}}</h1>
    @endforeach
@endsection