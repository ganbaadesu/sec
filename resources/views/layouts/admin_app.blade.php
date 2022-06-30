@extends('layouts/app')

@section('nav-bar')
  <li class="nav-item">
    <a class="nav-link" href="{{url('/user_management')}}">
      <i class="icon-head menu-icon"></i>
      <span class="menu-title">User management</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('ref_management')}}">
      <i class="icon-layout menu-icon"></i>
      <span class="menu-title">Order management</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/history')}}">
      <i class="icon-layout menu-icon"></i>
      <span class="menu-title">History</span>
    </a>
  </li>
@endsection

@section('main')
    @yield('content')
@endsection