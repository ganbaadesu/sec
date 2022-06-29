@extends('layouts/app')

@section('nav-bar')
  <li class="nav-item">
    <a class="nav-link" href="{{url('/user_management')}}">
      <i class="icon-head menu-icon"></i>
      <span class="menu-title">User management</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/add/ref">
      <i class="icon-layout menu-icon"></i>
      <span class="menu-title">Add order</span>
    </a>
  </li>
@endsection

@section('main')
    @yield('content')
@endsection