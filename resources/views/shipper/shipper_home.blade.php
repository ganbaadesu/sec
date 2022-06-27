@extends('layouts/shipper_app')

@section('content')
    <h1>Shipper</h1>
    @foreach ($data as $item)
        <h1>{{$item}}</h1>
    @endforeach
@endsection