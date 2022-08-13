@extends('layouts/app')

@section('nav-bar')
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#user_management" aria-expanded="false" aria-controls="user_management">
      <i class="icon-head menu-icon"></i>
      <span class="menu-title">Хэрэглэгчийн удирдлага</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="user_management">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{url('/users')}}">Хэрэглэгч бүртгэх</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{url('/user/permission')}}">Хэрэглэгчийн зөвшөөрөл</a></li>
      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ref_management" aria-expanded="false" aria-controls="ref_management">
      <i class="icon-paper menu-icon"></i>
      <span class="menu-title">Захиалгын удирдлага</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ref_management">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{url('/add/ref')}}">Захиалга нэмэх</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{url('/add/cntr')}}">Контайнар</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{url('/add/vehicle')}}">Тээврийн хэрэгсэл</a></li>
      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/history')}}">
      <i class="icon-clock menu-icon"></i>
      <span class="menu-title">History</span>
    </a>
  </li>
@endsection

@section('main')
    @yield('content')
@endsection